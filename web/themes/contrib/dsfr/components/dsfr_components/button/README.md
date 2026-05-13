# DSFR Component: Button

> **Category**: Action
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.button`

---

## Description

DSFR Button component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `type` | string | No | Type |
| `classes` | array | No | Additionnal CSS classes |
| `title` | string | No | Title attribute |
| `icon` | object | No | Icon properties |
| `aria_expanded` | boolean | No | Aria expanded |
| `aria_controls` | string | No | Aria controls |
| `label` | string | No | Label |
| `onclick` | string | No | Javascript onclick |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.button`

---

## Usage

```twig
{{ include('dsfr:button', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `button.component.yml`*
