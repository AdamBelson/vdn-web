# DSFR Component: Breadcrumb

> **Category**: Navigation
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.breadcrumb`

---

## Description

DSFR breadcrumb component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `attributes` | Drupal\Core\Template\Attribute | No | Attributes |
| `breadcrumb` | array | No | Menu links |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.breadcrumb`

---

## Usage

```twig
{{ include('dsfr:breadcrumb', { items: items }, with_context:false) }}
```

---

*Generated from `breadcrumb.component.yml`*
