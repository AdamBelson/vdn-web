# DSFR Component: Pagination

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.pagination`

---

## Description

DSFR pagination component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `aria_label` | string | No | Label |
| `current` | integer | No | Current page |
| `type` | string | No | Pager type |
| `first` | object | No | First link |
| `previous` | object | No | First link |
| `pages` | array | No | - |
| `next` | object | No | First link |
| `last` | object | No | First link |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.pagination`

---

## Usage

```twig
{{ include('dsfr:pagination', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `pagination.component.yml`*
