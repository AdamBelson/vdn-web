# DSFR Component: Highlight

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.highlight`

---

## Description

DSFR highlight component

---

## Variants

| Variant | Title |
|---------|-------|
| `default` | Medium |
| `sm` | Small |
| `lg` | Large |

---
## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML id |
| `color` | string | No | Color |

---
## Slots

| Name | Description |
|------|-------------|
| `description` | Description |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.highlight`

---

## Usage

```twig
{{ include('dsfr:highlight', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `highlight.component.yml`*
