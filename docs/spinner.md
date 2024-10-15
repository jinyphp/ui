---
theme: ""
layout: "markdown"
title: "..."
breadcrumb:
  - "Docs"
---

# Spinner

스피너는 주로 프로젝트 안에서 어떠한 로딩 상태를 표시하기위해 사용될 수 있다.

### class

bootstrap과 tailwind에 있는 유틸리티 클래스를 사용하여 변경이 가능합니다.

## spinnerStyle

spinnerStyle를 사용하여 간단하게 spinner의 색깔을 변경할 수 있다.

- primary
- secondary
- success
- danger
- warning
- info
- ligth
- dark

## spinnerSize

spinnerStyle="sm" 를 사용하여 spinner의 크기를 줄일 수 있다.

size를 사용하지 않고 class에 width와 height를 변경하는 유틸리티를 사용하여 사이즈를 변경할 수 있다.

## x-spinner-border

`x-spinner-border`는 원의 테두리를 회전하는 로딩인디게이터를 생성한다.

```html
<x-spinner-border spinnerStyle="primary" spinnerSize="sm"></x-spinner-border>
<x-spinner-border spinnerStyle="secondary"></x-spinner-border>
<x-spinner-border spinnerStyle="success"></x-spinner-border>
```

## x-spinner-grow

`x-spinner-grow`는 원이 커졌다 작아지는 로딩인디케이터를 생성한다.

```html
<x-spinner-grow spinnerStyle="primary" spinnerSize="sm"></x-spinner-grow>
<x-spinner-grow spinnerStyle="secondary"></x-spinner-grow>
<x-spinner-grow spinnerStyle="success"></x-spinner-grow>
```
