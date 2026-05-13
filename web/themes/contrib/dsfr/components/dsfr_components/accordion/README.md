# DSFR Component: Accordion

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.accordion`

---

## Description

DSFR Accordion component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `label` | string | No | Accordion title |

---
## Slots

| Name | Description |
|------|-------------|
| `content` | content |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.accordion`

---

## Usage

```twig
{{ include('dsfr:accordion', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `accordion.component.yml`*
