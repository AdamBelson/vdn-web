# DSFR Component: Badge

> **Category**: Label
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.badge`

---

## Description

DSFR badge component

---

## Variants

| Variant | Title |
|---------|-------|
| `error` | Error |
| `success` | Success |
| `info` | Information |
| `warning` | Warning |
| `error--sm` | Error small |
| `success--sm` | Success small |
| `info--sm` | Info small |
| `warning--sm` | Warning small |

---
## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_tag` | string | No | HTML tag |
| `no_icon` | boolean | No | Disable system icon |
| `label` | string | No | Label |
| `ellipsis` | boolean | No | Ellipsis |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.badge`

---

## Usage

```twig
{{ include('dsfr:badge', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `badge.component.yml`*
