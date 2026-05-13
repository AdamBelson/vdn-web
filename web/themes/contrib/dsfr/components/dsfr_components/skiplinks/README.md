# DSFR Component: Skiplinks

> **Category**: Navigation
>
> **Status**: Experimental
>
> **Group**: DSFR
>
> **Dependencies**: - `dsfr/lib.skiplink`

---

## Description

Skip links allow users navigating with a keyboard, 
or equipped with screen readers,
to access specific areas of the page more quickly.

---

## Properties (Props)

| Name | Type | Required | Description |
|------|------|----------|-------------|
| `skiplinks` | array | No | Skiplinks |
| `label` | string | No | Skiplink label |

---

## JavaScript / CSS Dependencies

- `dsfr/lib.skiplink`

---

## Usage

```twig
{{ include('dsfr:skiplinks', { items: items }, with_context:false) }}
```

---

*Generated from `skiplinks.component.yml`*
