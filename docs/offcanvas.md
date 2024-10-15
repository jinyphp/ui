---
theme: ""
layout: "markdown"
title: "..."
breadcrumb:
  - "Docs"
---

# offcanvas

숨겨진 사이드바를 사용할 수 있는 컴포넌트입니다.

### class

bootstrap과 tailwind에 있는 유틸리티 클래스를 사용하여 변경이 가능합니다.

## btnType

오프캔버스를 트리거할 버튼의 색깔을 간단하게 지정해 줄 수 있습니다.

- primary
- secondary
- success
- danger
- warning
- info
- ligth
- dark

## x-offcanvas-button

오프캔버스를 트리거할 버튼 컴포넌트 입니다.

```html
<x-offcanvas-button btnType="danger" targetName="offcanvasName">
  Click Me!!
</x-offcanvas-button>

<x-offcanvas-button class="m-4" btnType="dark" targetName="offcanvasName">
</x-offcanvas-button>
```

### targetName

targetName에는 트리거될 offcanvas와 동일하게 작성해야합니다.

## x-offcanvas

`x-offcanvas` 는 기본 오프캔버스를 생성할 수 있는 컴포넌트 입니다.
트리거할 button과 함께 사용해야합니다.

```html
<x-offcanvas-button targetName="offcanvasName"> click Me</x-offcanvas-button>

<x-offcanvas
  bodyScroll
  backdrop="true"
  direction="end"
  targetName="offcanvasName"
>
  <x-offcanvas-header titleName="오프캔버스의 제목"> </x-offcanvas-header>

  <x-offcanvas-body> 오프 캔버스의 컨텐츠 작성 </x-offcanvas-body>
</x-offcanvas>
```

### bodyScoll

숨겨진 사이드바가 나왔을 때 뒤에 body에 작성되어있는 content를 scroll할 수 있게 만드는 속성입니다.

### backdrop

숨겨진 사이드바가 나왔을 때 3가지 옵션을 선택할 수 있습니다.

- true : 사이드바를 제외한 body부분이 어두워지며 body 부분을 클릭할 경우 사이드바가 사라집니다.
- false : 사이드바가 등장하고 다른 부분은 변하지 않습니다. 외부를 클릭할 경우에도 사이드바가 사라지지 않습니다.
- static : 사이드바를 제외한 body부분이 어두워지며 body 부분을 클릭할 경우에도 사이드바가 사라지지 않습니다.

### direction

사이드바가 나오는 위치를 설정해 줄 수 있는 속성입니다.

- start (default) : 오프캔버스를 뷰포트의 왼쪽에 배치합니다.
- end : 오프캔버스를 뷰포트의 오른쪽에 배치합니다.
- top : 오프캔버스를 뷰포트의 위에 배치합니다.
- bottom : 오프캔버스를 뷰포트의 아래에 배치합니다.

## x-offcanvas-header

오프캔버스의 제목을 넣을 수 있습니다.
닫기 버튼이 포함되어있으며 `titleName` 속성에 제목을 적을 수 있습니다.

## x-offcanvas-body

오프캔버스 안의 컨텐츠를 넣을 수 있는 컴포넌트 입니다.
