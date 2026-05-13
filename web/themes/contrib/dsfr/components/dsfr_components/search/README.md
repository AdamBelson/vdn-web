# DSFR Component: Search

> **Category**: Action
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.search`

---

## Description

DSFR search component

---

## Variants

| Variant | Title |
|---------|-------|
| `md` | Medium |
| `lg` | Large |

---
## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `label` | string | No | Search label |
| `placeholder` | string | No | Search placeholder |

---
## Slots

| Name | Description |
|------|-------------|
| `children` | Children (drupal thing) |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.search`

---

## Usage

```twig
{{ include('dsfr:search', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `search.component.yml`*
