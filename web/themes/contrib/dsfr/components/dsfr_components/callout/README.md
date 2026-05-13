# DSFR Component: Callout

> **Category**: Highlight
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.callout`

---

## Description

DSFR callout component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML id |
| `title_tag` | string | No | HTML title tag |
| `description_tag` | string | No | HTML description tag |
| `color` | string | No | Color |
| `icon` | string | No | Icon |

---
## Slots

| Name | Description |
|------|-------------|
| `title` | Title |
| `description` | Text |
| `button` | Button or link |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.callout`

---

## Usage

```twig
{{ include('dsfr:callout', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `callout.component.yml`*
