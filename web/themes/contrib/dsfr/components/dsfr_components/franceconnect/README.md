# DSFR Component: FranceConnect

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.connect`

---

## Description

DSFR FranceConnect component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `html_tag` | string | No | HTML tag of the button |
| `plus` | boolean | No | France connect plus |
| `label` | string | No | Label |
| `brand` | string | No | Brand |

---
## Slots

| Name | Description |
|------|-------------|
| `link` | Link |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.connect`

---

## Usage

```twig
{{ include('dsfr:franceconnect', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `franceconnect.component.yml`*
