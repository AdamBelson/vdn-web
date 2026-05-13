# DSFR Component: Onecol

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR - layouts
>
> **Dependencies**: - `dsfr/lib.core`

---

## Description

DSFR/Drupal onecol component

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
| `content` | content |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.core`

---

## Usage

```twig
{{ include('dsfr:onecol', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `onecol.component.yml`*
