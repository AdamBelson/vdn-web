# DSFR Component: Notice

> **Category**: Feedback
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.notice`

---

## Description

DSFR notice component

---

## Variants

| Variant | Title |
|---------|-------|
| `error` | Error |
| `success` | Success |
| `info` | Information |
| `warning` | Warning |

---
## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `title` | string | No | Alert title |
| `icon` | string | No | Custom icon |

---
## Slots

| Name | Description |
|------|-------------|
| `description` | Description |
| `link` | Link |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.notice`

---

## Usage

```twig
{{ include('dsfr:notice', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `notice.component.yml`*
