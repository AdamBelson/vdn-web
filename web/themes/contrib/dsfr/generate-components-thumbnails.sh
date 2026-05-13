#!/bin/bash

DSFR_VERSION="1.14"
BASE_URL="https://www.systeme-de-design.gouv.fr/v${DSFR_VERSION}/asset/component"
COMPONENTS_ROOT="./components"

for COMPONENTS_DIR in "$COMPONENTS_ROOT"/*/; do
  for dir in "$COMPONENTS_DIR"/*/; do
    [[ -d "$dir" ]] || continue
    folder_name=$(basename "$dir")
    component_name="${folder_name%_group}"
    component_name="${component_name%_panel}"
    component_name="${component_name%s}"
    thumbnail_path="${dir}thumbnail.png"
    cover_url="${BASE_URL}/${component_name}/cover/cover.png"
    echo "Computing : $folder_name → $component_name"
    http_code=$(curl -s -o /dev/null -w "%{http_code}" "$cover_url")
    if [[ $http_code -eq 200 ]]; then
      echo "  → Downloding $cover_url"
      curl -s -f "$cover_url" -o "$thumbnail_path"
      if [[ $? -eq 0 ]]; then
        echo "  ✓ thumbnail.png added $dir"
      else
        echo "  ✗ Failed to compoute $component_name "
      fi
    else
      echo "  ✗ Did not retrieve cover for $component_name (HTTP $http_code) : $cover_url"
    fi
    echo
  done
done

echo "Thumbnail generation end."
