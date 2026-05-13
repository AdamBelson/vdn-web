# DSFR Component: Twocols

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR - layouts
>
> **Dependencies**: - `dsfr/lib.core`

---

## Description

DSFR/Drupal twocols component

---

## Variants

| Variant | Title |
|---------|-------|
| `50-50` | 50-50 |
| `25-75` | 25-75 |
| `40-60` | 40-60 |
| `60-40` | 40-60 |
| `75-25` | 75-25 |

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
{{ include('dsfr:twocol', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `twocol.component.yml`*
