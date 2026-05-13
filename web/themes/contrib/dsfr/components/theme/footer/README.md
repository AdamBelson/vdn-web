# DSFR Component: Footer

> **Category**: Layout
>
> **Status**: Experimental
>
> **Group**: DSFR Theme
>
> **Dependencies**: - `dsfr/lib.footer`

---

## Description

DSFR footer component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `fluid` | boolean | No | Fluid layout |
| `theme_settings` | object | No | Theme settings |
| `site_settings` | object | No | Site settings |

---
## Slots

| Name | Description |
|------|-------------|
| `footer` | Page infos |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.footer`

---

## Usage

```twig
{{ include('dsfr:footer', { content: content }, with_context:false) }}
```

---

*Generated from `footer.component.yml`*
