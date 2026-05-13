# DSFR Component: Link

> **Category**: Action
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.core`

---

## Description

DSFR link component

---

## Variants

| Variant | Title |
|---------|-------|
| `xs` | Extra small |
| `sm` | Small |
| `md` | Medium |
| `lg` | Large |

---
## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `icon` | string | No | Icon CSS class |
| `icon_position` | string | No | Icon position |
| `href` | string | No | Href |
| `label` | string | No | Label |
| `detail` | string | No | Detail |
| `download` | boolean | No | Download |
| `assess_file` | boolean | No | Assess file |
| `external` | boolean | No | External link |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.core`

---

## Usage

```twig
{{ include('dsfr:link', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `link.component.yml`*
