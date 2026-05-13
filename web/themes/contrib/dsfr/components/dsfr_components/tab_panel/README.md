# DSFR Component: Tab panel

> **Category**: Navigation
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: 

---

## Description

DSFR tab panel component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML id |
| `selected` | boolean | No | Selected |

---
## Slots

| Name | Description |
|------|-------------|
| `content` | Content |

---

## JavaScript / CSS Dependencies



---

## Usage

```twig
{{ include('dsfr:tab_panel', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `tab_panel.component.yml`*
