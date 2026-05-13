# DSFR Component: Card

> **Category**: Content
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.card`

---

## Description

DSFR card component

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `html_id` | string | No | HTML element ID |
| `enlarge_link` | boolean | No | Enlarge link |
| `title` | string | No | Card title |
| `href` | string | No | Link |
| `download` | boolean | No | Download |
| `detail_start` | string | No | Start detail |
| `detail_end` | string | No | End detail |
| `icon` | string | No | Custom icon |

---
## Slots

| Name | Description |
|------|-------------|
| `description` | Description |
| `start` | Card start content |
| `link` | Use this link instead of title and href |
| `header` | Header |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.card`

---

## Usage

```twig
{{ include('dsfr:card', { label: 'Example' }, with_context:false) }}
```

---

*Generated from `card.component.yml`*
