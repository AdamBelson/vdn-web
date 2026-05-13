# DSFR Component: Sidemenu

> **Category**: Navigation
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.sidemenu`

---

## Description

DSFR sidemenu component

---

## Variants

| Variant | Title |
|---------|-------|
| `sticky` | Sticky |
| `sticky-full-height` | Sticky full height |
| `right` | Right |
| `fr-sidemenu--sticky` | Sticky sidemenu |

---
## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `title` | string | No | Title |
| `items` | array | No | Menu links |
| `sticky` | boolean | No | Sticky |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.sidemenu`

---

## Usage

```twig
{{ include('dsfr:sidemenu', { items: items }, with_context:false) }}
```

---

*Generated from `sidemenu.component.yml`*
