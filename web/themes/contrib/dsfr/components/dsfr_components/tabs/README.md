# DSFR Component: Tabs

> **Category**: Navigation
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.tab`

---

## Description

DSFR tabs component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `label` | string | No | Tabs title |

---
## Slots

| Name | Description |
|------|-------------|
| `tabs` | Tabs |
| `panels` | Panels |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.tab`

---

## Usage

```twig
{{ include('dsfr:tabs', { tabs: items }, with_context:false) }}
```

---

*Generated from `tabs.component.yml`*
