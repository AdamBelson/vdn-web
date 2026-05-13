# DSFR Component: Header

> **Category**: Layout
>
> **Status**: Experimental
>
> **Group**: DSFR Theme
>
> **Dependencies**: - `dsfr/lib.header`

---

## Description

DSFR header component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `attributes` | Drupal\Core\Template\Attribute | No | Attributes |
| `theme_settings` | object | No | Theme settings |
| `site_settings` | object | No | Site settings |

---
## Slots

| Name | Description |
|------|-------------|
| `header_brand` | Header brand |
| `primary_menu` | Primary menu |
| `header_search` | Header search |
| `header_menu` | Header menu |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.header`

---

## Usage

```twig
{{ include('dsfr:header', { content: content }, with_context:false) }}
```

---

*Generated from `header.component.yml`*
