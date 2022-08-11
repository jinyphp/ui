# tab-radio
라디오 입력을 활용한 tabbar를 구현합니다.
무거운 `javascript`를 코드를 이용하지 않고, `css`코드만을 이용하여 텝바를 구현합니다.

## 컴포넌트
CSS 코드와 텝바의 아이템을 래핑하는 `x-tab-radio` 컴포넌트를 제공합니다.
```php
<x-tab-radio>
                        <input type="radio" name="__tabbar" id="tab1" checked/>
                        <div class="tab-header">
                            <label for="tab1">상품설명</label>
                        </div>
                        <div class="tab-content">
                            내용
                        </div>
</x-tab-tadio>
```

## 텝 아이템
텝 아이템은 3개의 테그로 구성되어 집니다. 선택을 표시하는 radio input과 항목을 선택하는 header역할의 label
내용을 구성하는 content 부분입니다.

그리고 각 항목은 id 와 for 속성을 이용하여 텝을 연결합니다.

```php
<x-tab-radio-item title="목차" selected="checked">
     목차 목록 입니다.
</x-tab-radio-item>
```

## 색상지정

```php
public $color = "#0275b8";
    public $hover_background = "#def2fb";

```

### 텝 타이틀 지정
텝의 목차는 2가지 방법으로 지정을 할 수 있습니다. 
`x-tab-radio-item`의 title 속성을 이용하여 지정하는 방법과 `x-slot` 을 이용하여 타이틀을 지정할 수 있습니다.

```php
<x-slot name="title">
    목차
</x-slot>
```

### 기본선택
기본탭을 선택합니다. `x-tab-radio-item`의 selected 속성을 `checked`값으로 지정하면 됩니다.
