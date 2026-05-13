# DSFR Component: Tags group

> **Category**: Label
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.tag`

---

## Description

DSFR tags group component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML id |

---
## Slots

| Name | Description |
|------|-------------|
| `tags` | Tags |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.tag`

---

## Usage

```twig
{{ include('dsfr:tags_group', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `tags_group.component.yml`*
