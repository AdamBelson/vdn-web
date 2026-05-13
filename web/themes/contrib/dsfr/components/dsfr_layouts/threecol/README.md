# DSFR Component: Threecols

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR - layouts
>
> **Dependencies**: - `dsfr/lib.core`

---

## Description

DSFR/Drupal threecols component

---

## Variants

| Variant | Title |
|---------|-------|
| `25-50-25` | 25-50-25 |
| `50-25-25` | 50-25-25 |
| `25-25-50` | 25-25-50 |
| `33-33-33` | 33-33-33 |

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

---

## JavaScript / CSS Dependencies

- `dsfr/lib.core`

---

## Usage

```twig
{{ include('dsfr:threecol', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `threecol.component.yml`*
