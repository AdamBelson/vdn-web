# DSFR Component: Tooltip

> **Category**: Action
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.tooltip`

---

## Description

DSFR tooltip component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |

---
## Slots

| Name | Description |
|------|-------------|
| `description` | Description |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.tooltip`

---

## Usage

```twig
{{ include('dsfr:tooltip', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `tooltip.component.yml`*
