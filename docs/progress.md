---
theme: ""
layout: "markdown"
title: "..."
breadcrumb:
  - "Docs"
---

# Progress

프로그레스는 주로 진행정도를 표시하기위해 사용될 수 있다.

### class

bootstrap과 tailwind에 있는 유틸리티 클래스를 사용하여 변경이 가능합니다.

## type

type를 사용하여 간단하게 바의 색깔을 변경할 수 있다.

- primary
- secondary
- success
- danger
- warning
- info
- ligth
- dark

## valuenow

valuenow를 사용하여 프로그레스바의 진행률을 설정할 수 있다.

## text

text를 사용하여 프로그레스바 안의 텍스트의 색깔을 설정할 수 있다.

- primary
- secondary
- success
- danger
- warning
- info
- ligth
- dark

## label

label를 사용하여 aria-label 속성을 설정할 수 있다.

## x-progress-bar

`x-progress-bar`는 기본적인 progress 바를 생성할 수 있다.
aria-valuemin = "0" aria-valuemax = "100" 으로 기본 설정되어있으며
valuenow 속성명을 사용하여 진행정도를 표시할 수 있다.

```html
<x-progress-bar valuenow="20" type="primary" text ="success">20</x-spinner-border>
<x-progress-bar valuenow="40" type="info" text ="dark">40</x-spinner-border>
```

### striped

striped를 추가하여 프로그레스 바의 배경색에 CSS 그라데이션으로 스프라이프를 적용할 수 있다.

```html
<x-progress-bar valuenow="20" type="primary" text ="success" striped>20</x-spinner-border>
<x-progress-bar valuenow="40" type="info" text ="dark" striped>40</x-spinner-border>
```

### animated

스프라이프 형태의 그라데이션을 애니메이션화할 수 있다.
striped와 animated를 동시에 설정해야합니다..

```html
<x-progress-bar valuenow="20" type="primary" text ="success" striped animated>20</x-spinner-border>
<x-progress-bar valuenow="40" type="info" text ="dark" striped animated>40</x-spinner-border>
```

## x-progress-stack (중첩 프로그레스바)

`x-progress-stack`는 여러 개의 진행률 컴포넌트를 포함시켜 하나의 누적된 프로그레스 바를 만들 수 있습니다.

여러 누적되는 프로그레스 바는 `x-stack-bar` 컴포넌트를 `x-progress-stack` 하위 요소로 넣어서 사용할 수 있습니다.
`x-stack-bar` 는 `x-progress-bar` 동일한하게 설정이 가능합니다.

```html
    <x-progress-stack>
        <x-stack-bar valuenow="10" striped animated type="success" text="primary">10%</x-progress-bar>
        <x-stack-bar valuenow="15" striped animated type="primary" text="info">15%</x-progress-bar>
        <x-stack-bar valuenow="25" striped animated type="danger" text="primary">25%</x-progress-bar>
    </x-progress-stack>
```
