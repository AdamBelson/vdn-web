# DSFR Component: Tag

> **Category**: Label
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.tag`

---

## Description

DSFR tag component

---

## Variants

| Variant | Title |
|---------|-------|
| `sm` | Small |
| `md` | Medium |

---
## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `label` | string | No | Label |
| `url` | string | No | URL |
| `dismiss` | boolean | No | Dismiss |
| `color` | string | No | Color scheme |
| `icon` | string | No | Icon |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.tag`

---

## Usage

```twig
{{ include('dsfr:tag', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `tag.component.yml`*
