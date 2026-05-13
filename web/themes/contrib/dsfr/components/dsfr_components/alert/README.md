# DSFR Component: Alert

> **Category**: Feedback
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.alert`

---

## Description

DSFR alert component

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
| `html_id` | string | No | HTML element ID |
| `title` | string | No | Alert title |

---
## Slots

| Name | Description |
|------|-------------|
| `message` | message |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.alert`

---

## Usage

```twig
{{ include('dsfr:alert', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `alert.component.yml`*
