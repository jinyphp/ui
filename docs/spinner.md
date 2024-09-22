---
theme: ""
layout: "markdown"
title: "..."
breadcrumb:
  - "Docs"
---

# Spinner

스피너는 주로 프로젝트의 로딩 상태를 표시하기위해 사용될 수 있다.

### class

bootstrap과 tailwind에 있는 유틸리티 클래스를 사용하여 변경이 가능합니다.

## type

type를 사용하여 간단하게 spinner의 색깔을 변경할 수 있다.

- primary
- secondary
- success
- danger
- warning
- info
- ligth
- dark

## size

size를 사용하여 spinner의 크기를 줄일 수 있다.

- sm
  size를 사용하지 않고 class에 width와 height를 변경하는 유틸리티를 사용하여 사이즈를 변경할 수 있다.

## x-spinner-border

`x-spinner-border`는 원의 테두리를 회전하는 로딩인디게이터를 생성한다.

```html
<x-spinner-border type="primary" size="sm"></x-spinner-border>
<x-spinner-border type="secondary"></x-spinner-border>
<x-spinner-border type="success"></x-spinner-border>
```

## x-spinner-grow

`x-spinner-grow`는 원이 커졌다 작아지는 로딩인디케이터를 생성한다.

```html
<x-spinner-grow type="primary"></x-spinner-grow>
<x-spinner-grow type="secondary"></x-spinner-grow>
<x-spinner-grow type="success"></x-spinner-grow>
```
