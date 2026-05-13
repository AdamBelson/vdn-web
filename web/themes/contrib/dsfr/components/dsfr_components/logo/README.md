# DSFR Component: Logo

> **Category**: Brand
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.logo`

---

## Description

DSFR logo component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `size` | string | No | Size |
| `label` | string | No | Logo label |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.logo`

---

## Usage

```twig
{{ include('dsfr:logo', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `logo.component.yml`*
