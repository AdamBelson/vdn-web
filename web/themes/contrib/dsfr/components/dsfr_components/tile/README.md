# DSFR Component: Tile

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.tile`

---

## Description

DSFR tilecomponent

---

## Variants

| Variant | Title |
|---------|-------|
| `default` | Vertical |
| `horizontal` | Horizontal |
| `sm` | Vertical small |
| `horizontal__sm` | Horizontal small |

---
## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML id |
| `title` | string | No | Title |
| `url` | string | No | URL |
| `enlarge_link` | boolean | No | Enlarge link |
| `title_tag` | string | No | HTML title tag |
| `background` | string | No | Background color |
| `has_arrow` | boolean | No | Has arrow icon |
| `has_border` | boolean | No | Has border |
| `has_shadow` | boolean | No | Has shadow |

---
## Slots

| Name | Description |
|------|-------------|
| `image` | Image |
| `tags` | Tags |
| `description` | Description |
| `detail` | Detail |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.tile`

---

## Usage

```twig
{{ include('dsfr:tile', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `tile.component.yml`*
