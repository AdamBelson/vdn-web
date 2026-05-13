# DSFR Component: Upload

> **Category**: Action
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.upload`

---

## Description

DSFR upload component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML identifier |
| `label` | string | No | Label |
| `hint` | string | No | Hint |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.upload`

---

## Usage

```twig
{{ include('dsfr:upload', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `upload.component.yml`*
