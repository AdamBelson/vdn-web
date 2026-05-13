# DSFR Component: Tab

> **Category**: Navigation
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.tab`

---

## Description

DSFR tab component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML id |
| `label` | string | No | Label |
| `url` | string | No | URL |
| `icon` | string | No | Icon |
| `selected` | boolean | No | Selected |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.tab`

---

## Usage

```twig
{{ include('dsfr:tab', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `tab.component.yml`*
