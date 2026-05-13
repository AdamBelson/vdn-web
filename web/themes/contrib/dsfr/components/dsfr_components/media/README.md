# DSFR Component: Media

> **Category**: Media
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.content`

---

## Description

DSFR quote component

---

## Variants

| Variant | Title |
|---------|-------|
| `default` | Default |
| `sm` | Small |
| `md` | Medium |
| `lg` | Large |

---
## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `label` | string | No | Label |
| `url` | string | No | Url |

---
## Slots

| Name | Description |
|------|-------------|
| `description` | Description |
| `media` | Media |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.content`

---

## Usage

```twig
{{ include('dsfr:media', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `media.component.yml`*
