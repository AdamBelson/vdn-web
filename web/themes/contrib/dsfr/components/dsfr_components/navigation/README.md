# DSFR Component: Navigation

> **Category**: Navigation
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.navigation`

---

## Description

DSFR navigation component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `is_megamenu` | boolean | No | Navigation is megamenu |
| `max_items_in_lvl3_by_col` | integer | No | Max items in lvl3 by col |
| `html_id` | string | No | HTML id |
| `items` | array | No | Menu links |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.navigation`

---

## Usage

```twig
{{ include('dsfr:navigation', { items: items }, with_context:false) }}
```

---

*Generated from `navigation.component.yml`*
