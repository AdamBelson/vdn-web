# DSFR Component: Accordion group

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.accordion`

---

## Description

DSFR Accordion group component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `items` | array | No | Items |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.accordion`

---

## Usage

```twig
{% for item in items %}
  {{ include('dsfr:accordion', item, with_context:false) }}
{% endfor %}
```

---

*Generated from `accordion_group.component.yml`*
