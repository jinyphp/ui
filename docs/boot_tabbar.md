# Boot스트랩 tabbar 출력하기

## 코드로 출력하기
`xNavTab()` 헬퍼함수를 이용하여 텝바를 코드상에서 출력이 가능합니다. 
텝바를 출력하기 위해서는 체인 `->addTab()` 과 `->setContent()` 2개 메소드를 통과해야 합니다.

```php
{!! xBootNavTab()
    ->addTab("Home1")->setContent("aaa")
    ->addTab("Profile", $active=true)->setContent("bbb")
    ->addTab("Settings")->setContent("ccc")
!!}
```

## 디자인 스타일

* nav-bordered

```php
xBootNavTab("nav-bordered");
```

## 살펴보기
탭바는 2개의 클래스를 연동하여 동작을 합니다.
* Jiny\UI\Components\TabBar
* Jiny\UI\Components\TabBarContent

