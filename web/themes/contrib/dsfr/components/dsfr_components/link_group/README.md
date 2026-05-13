# DSFR Component: Link group

> **Category**: Action
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.core`

---

## Description

DSFR link group component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `links` | array | No | Links |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.core`

---

## Usage

```twig
{% for item in items %}
  {{ include('dsfr:link', item, with_context:false) }}
{% endfor %}
```

---

*Generated from `link_group.component.yml`*
