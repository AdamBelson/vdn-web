# DSFR Component: Fourcols

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR - layouts
>
> **Dependencies**: - `dsfr/lib.core`

---

## Description

DSFR/Drupal fourcols component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `fluid` | boolean | No | Fluid |
| `gutters` | boolean | No | Gutters |
| `align` | string | No | Horizontal align |
| `valign` | string | No | Vertical align |

---
## Slots

| Name | Description |
|------|-------------|
| `first` | First column |
| `second` | Second column |
| `third` | Third column |
| `fourth` | Fourth column |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.core`

---

## Usage

```twig
{{ include('dsfr:fourcol', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `fourcol.component.yml`*
