#!/bin/bash

# Check yg.
command -v yq >/dev/null 2>&1 || { echo "Install yq (Go) : https://github.com/mikefarah/yq"; exit 1; }

COMPONENTS_ROOT="./components"
shopt -s nullglob

# DSFR category.
declare -A categories
categories["accordion"]="Content"
categories["accordion_group"]="Content"
categories["alert"]="Feedback"
categories["badge"]="Label"
categories["badge_group"]="Label"
categories["breadcrumb"]="Navigation"
categories["button"]="Action"
categories["callout"]="Highlight"
categories["card"]="Content"
categories["connect"]="Authentication"
categories["display"]="Layout"
categories["follow"]="Social"
categories["highlight"]="Content"
categories["link"]="Action"
categories["link_group"]="Action"
categories["logo"]="Brand"
categories["media"]="Media"
categories["navigation"]="Navigation"
categories["notice"]="Feedback"
categories["quote"]="Content"
categories["search"]="Action"
categories["sidemenu"]="Navigation"
categories["skiplinks"]="Navigation"
categories["tab"]="Navigation"
categories["tab_panel"]="Navigation"
categories["tabs"]="Navigation"
categories["tag"]="Label"
categories["tag_group"]="Label"
categories["tile"]="Content"
categories["tooltip"]="Action"
categories["upload"]="Action"
categories["footer"]="Layout"
categories["header"]="Layout"

get_usage_example() {
  local slug="$1"
  local base_slug="${slug%_group}"
  local is_group=0

  if [[ "$slug" != "$base_slug" ]]; then
    is_group=1
  fi

  case "$slug" in
    "tabs")
      echo "{{ include('dsfr:tabs', { tabs: items }, with_context:false) }}"
      ;;
    "navigation"|"sidemenu"|"skiplinks"|"follow"|"breadcrumb")
      echo "{{ include('dsfr:$slug', { items: items }, with_context:false) }}"
      ;;
    "header"|"footer")
      echo "{{ include('dsfr:$slug', { content: content }, with_context:false) }}"
      ;;
    *)
      if [[ $is_group -eq 1 && -d "$COMPONENTS_ROOT/dsfr_components/$base_slug" ]]; then
        echo "{% for item in items %}"
        echo "  {{ include('dsfr:$base_slug', item, with_context:false) }}"
        echo "{% endfor %}"
      else
        echo "{{ include('dsfr:$slug', { label: 'Example' }, with_context:false) }}"
      fi
      ;;
  esac
}

echo "Generate README.md..."

found=0
for yaml_file in "$COMPONENTS_ROOT"/*/*/*.component.yml; do
  [[ -f "$yaml_file" ]] || continue
  ((found++))

  dir=$(dirname "$yaml_file")
  slug=$(basename "$dir")
  readme="$dir/README.md"

  clean_slug="${slug%_group}"
  clean_slug="${clean_slug%_panel}"
  clean_slug="${clean_slug%s}"
  category="${categories[$clean_slug]:-${categories[$slug]:-Content}}"

  name=$(yq -r '.name // "Unknown"' "$yaml_file" | sed 's/DSFR - //')
  desc=$(yq -r '.description // "No description provided."' "$yaml_file")
  status=$(yq -r '.status // "experimental"' "$yaml_file" | sed 's/\b\(.\)/\u\1/; s/experimental/Experimental/')
  group=$(yq -r '.group // "DSFR"' "$yaml_file")

  # Dépendances
  deps=$(yq -r '.libraryOverrides.dependencies[]? // empty' "$yaml_file" | sed 's/^/- `/; s/$/`/' | paste -sd $'\n' - || echo "None")

  # Variants
  variants=""
  if yq -e '.variants' "$yaml_file" > /dev/null 2>&1; then
    variants="## Variants\n\n| Variant | Title |\n|---------|-------|\n"
    while IFS= read -r line; do
      variants+="$line\n"
    done < <(yq -r '.variants | to_entries[] | "| `\(.key)` | \(.value.title // "-") |"' "$yaml_file")
    variants+="\n---\n"
  fi

  # Props
  props=""
  if yq -e '.props.properties' "$yaml_file" > /dev/null 2>&1; then
    props="## Properties (Props)\n\n| Name | Type | Required | Description |\n|------|------|----------|-------------|\n"
    while IFS= read -r line; do
      props+="$line\n"
    done < <(yq -r '.props.properties | to_entries[] | "| `\(.key)` | \(.value.type // "-") | " + (if (.value.required // false) then "Yes" else "No" end) + " | \(.value.title // .value.description // "-") |"' "$yaml_file")
    props+="\n---\n"
  fi

  # Slots
  slots=""
  if yq -e '.slots' "$yaml_file" > /dev/null 2>&1; then
    slots="## Slots\n\n| Name | Description |\n|------|-------------|\n"
    while IFS= read -r line; do
      slots+="$line\n"
    done < <(yq -r '.slots | to_entries[] | "| `\(.key)` | \(.value.title // "-") |"' "$yaml_file")
    slots+="\n---\n"
  fi

  # Usage
  usage=$(get_usage_example "$slug")

  # README
  cat > "$readme" << EOF
# DSFR Component: $name

> **Category**: $category
>
> **Status**: $status
>
> **Group**: $group
>
> **Dependencies**: $deps

---

## Description

$desc

---

$variants$props$slots
## JavaScript / CSS Dependencies

$deps

---

## Usage

\`\`\`twig
$usage
\`\`\`

---

*Generated from \`$slug.component.yml\`*
EOF
  sed -i 's/\\n/\n/g' $readme
  echo "  → $readme generated for $slug"
done

if [[ $found -eq 0 ]]; then
  echo "No .component.yml file found in $COMPONENTS_ROOT."
else
  echo "All README.md generated ($found files computed)."
fi
