# DSFR Component: Quote

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.quote`

---

## Description

DSFR quote component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `quote` | string | No | Quote |
| `source` | string | No | Source |
| `author` | string | No | Author |
| `items` | array | No | Quote items |

---
## Slots

| Name | Description |
|------|-------------|
| `image` | Image |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.quote`

---

## Usage

```twig
{{ include('dsfr:quote', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `quote.component.yml`*
