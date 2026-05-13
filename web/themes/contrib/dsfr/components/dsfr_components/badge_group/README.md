# DSFR Component: Badge group

> **Category**: Label
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.badge`

---

## Description

DSFR badge group component

---

## Slots

| Name | Description |
|------|-------------|
| `items` | Render array of badges |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.badge`

---

## Usage

```twig
{% for item in items %}
  {{ include('dsfr:badge', item, with_context:false) }}
{% endfor %}
```

---

*Generated from `badge_group.component.yml`*
