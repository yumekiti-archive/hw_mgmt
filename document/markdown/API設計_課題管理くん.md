[API設計_課題管理くん](https://hackmd.io/@2uWHWfDXTSmSmh_QJTqYfA/HkMxzpbrY)
===
###### tags: `課題管理くん`

---

# List
- [/login](#/login)
    - [POST](##POST_login)
- [/invite](#/invite)
    - [GET](##GET_invite)
    - [DELETE](##DELETE_invite)
- [/task](#/task)
    - [GET](##GET_task)
    - [POST](##POST_task)
    - [PUT](##PUT_task)
    - [DELETE](##DELETE_task)
- [/lesson](#/lesson)
    - [GET](##GET_lesson)
    - [POST](##POST_lesson)
    - [PUT](##PUT_lesson)
    - [DELETE](##DELETE_lesson)
- [/timetable](#/timetable)
    - [GET](##GET_timetable)
    - [POST](##POST_timetable)
    - [PUT](##PUT_timetable)
    - [DELETE](##DELETE_timetable)
- [/user](#/user)
    - [GET](##GET_user)
    - [POST](##POST_user)
    - [PUT](##PUT_user)
    - [DELETE](##DELETE_user)

---

# リクエスト説明
| コード | 状態 | 説明 |
| - | - | - |
| 200 | OK | リクエストが正常に処理された |
| 201 | Created | リクエストが正常に処理され、新規リソースが作成された |
| 204 | No Content | リクエストが正常に処理されたが、返す新規情報はない |
| 400 | Bad Request | サーバーが理解できない無効な要求である |
| 401 | Unauthorized | 要求されたリソースには認証が必要である |
| 403 | Forbidden | 要求されたリクエストは拒否された |
| 404 | Not Found | 要求されたリソースはサーバーに存在しない |
| 500 | Internal Server Error | サーバーでエラーが発生した |

---

# /login

## POST_login

### 概要
自分のタスクを追加する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| email | string | メールアドレス |
| password | string | パスワード |

```json=
{
    "achievement_count":1,
    "lesson_id":1
}
```

### レスポンス

```json=
return ['message' => 'ログインしました。'];
```

---

# /invite

## パス
| GET | DELETE |
| - | - |
| /invite/:token | /invite/:invite_user_id |

## GET_invite

### 概要
相手の招待(invite)を受け取り中間テーブルに追加する

### レスポンス

```json=
{
    "invite_user_id":2,
    "user_id":1
}
```

## DELETE_invite

### 概要
自分の招待(invite)を削除する

### レスポンス
response(null, 204);

---

# /task

## パス
| GET | POST | PUT | DELETE |
| - | - | - | - |
| /task | /task | /task | /task/:id |

## GET_task

### 概要
自分のタスクを取得する

### レスポンス

```json=
[
    {
        "id":1,
        "achievement_count":1,
        "created_at":"2021-11-10 10:04:30",
        "updated_at":"2021-11-10 10:04:30",
        "lesson_id":1,
        "usr_id":1
    },
    {
        "id":2,
        "achievement_count":1,
        "created_at":"2021-11-10 10:04:30",
        "updated_at":"2021-11-10 10:04:30",
        "lesson_id":1,
        "usr_id":1
    }
]
```

## POST_task

### 概要
自分のタスクを追加する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| achievement_count | number | 達成 |
| lesson_id | number | 授業id |

```json=
{
    "achievement_count":1,
    "lesson_id":1
}
```

### レスポンス

```json=
{
    "id":1,
    "achievement_count":1,
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30",
    "lesson_id":1,
    "usr_id":1
}
```

## PUT_task

### 概要
自分のタスクを編集する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| achievement_count | number | 達成 |
| lesson_id | number | 授業id |

```json=
{
    "achievement_count":1,
    "lesson_id":1,
}
```

### レスポンス

```json=
{
    "id":1,
    "achievement_count":1,
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30",
    "lesson_id":1,
    "usr_id":1
}
```

## DELETE_task

### 概要
自分のタスクを削除する

### レスポンス
response(null, 204);

---

# /lesson

## パス
| GET | POST | PUT | DELETE |
| - | - | - | - |
| /lesson | /lesson | /lesson | /lesson/:id |

## GET_lesson

### 概要
自分のレッスンを取得する

### レスポンス

```json=
[
    {
        "id":1,
        "title":"hoge",
        "limit":1,
        "created_at":"2021-11-10 10:04:30",
        "updated_at":"2021-11-10 10:04:30"
    },
    {
        "id":2,
        "title":"hoge",
        "limit":1,
        "created_at":"2021-11-10 10:04:30",
        "updated_at":"2021-11-10 10:04:30"
    }
]
```

## POST_lesson

### 概要
自分のレッスンを追加する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| title | string | 授業名 |
| limit | number | 期限 |

```json=
{
    "title":"hoge",
    "limit":1
}
```

### レスポンス

```json=
{
    "id":1,
    "title":"hoge",
    "limit":1,
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

## PUT_lesson

### 概要
自分のレッスンを編集する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |

```json=
{
    "id":1,
    "title":"huga",
    "limit":1
}
```

### レスポンス

```json=
{
    "id":1,
    "title":"huga",
    "limit":1,
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

## DELETE_lesson

### 概要
自分のレッスンを削除する

### レスポンス
response(null, 204);

---

# /timetable

## パス
| GET | POST | PUT | DELETE |
| - | - | - | - |
| /timetable | /timetable | /timetable | /timetable/:id |

## GET_timetable

### 概要
自分のタイムテーブルを取得する

### レスポンス

```json=
[
    {    
        "id":1,
        "week_count":1,
        "period":1,
        "user_id":1,
        "lesson_id":1
    },
    {
        "id":2,
        "week_count":1,
        "period":1,
        "user_id":1,
        "lesson_id":1
    }
]
```

## POST_timetable

### 概要
自分のタイムテーブルを追加する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| week_count | number | 曜日 |
| period | number | 何限目 |
| lesson_id | number | 授業id |

```json=
{
    "week_count":1,
    "period":1,
    "lesson_id":1
}
```

### レスポンス
登録した内容を返す

```json=
{
    "id":1,
    "week_count":1,
    "period":1,
    "lesson_id":1
}
```

## PUT_timetable

### 概要
自分のタイムテーブルを編集する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| week_count | number | 曜日 |
| period | number | 何限目 |
| lesson_id | number | 授業id |

```json=
{
    "week_count":1,
    "period":1,
    "lesson_id":1
}
```

### レスポンス
変更した内容を返す

```json=
{
    "id":1,
    "week_count":1,
    "period":1,
    "lesson_id":1
}
```

## DELETE_timetable

### 概要
自分のタイムテーブルを削除する

### レスポンス
response(null, 204);

---

# /user

## パス
| GET | POST | PUT | DELETE |
| - | - | - | - |
| /user | /user | /user | /user |

## GET_user

### 概要
認証済みなら自分のユーザー情報を返す

### レスポンス
ユーザー情報を返す

```json=
{
    "id":1,
    "name":"test1",
    "email":"test1@test.jp",
    "email_verified_at":"2021-11-10 10:04:30",
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

## POST_user

### 概要
user登録する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| name | string | ユーザー名 |
| email | string | メールアドレス |
| password | string | パスワード |

```json=
{
    "name":"test1",
    "email":"test1@test.jp",
    "password":"testtest"
}
```

### レスポンス
登録した内容を返す

```json=
{
    "id":1,
    "name":"test1",
    "email":"test1@test.jp",
    "email_verified_at":"2021-11-10 10:04:30",
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

## PUT_user

### 概要
user情報を編集する

### リクエスト
| パラメータ名 | 型 | 内容 |
| - | - | - |
| name | string | ユーザー名 |
| email | string | メールアドレス |
| password | string | パスワード |

### レスポンス
編集後のユーザー情報を返す

```json=
{
    "id":1,
    "name":"test1",
    "email":"test1@test.jp",
    "email_verified_at":"2021-11-10 10:04:30",
    "created_at":"2021-11-10 10:04:30",
    "updated_at":"2021-11-10 10:04:30"
}
```

## DELETE_user

### 概要
userを削除する

### レスポンス
response(null, 204);
