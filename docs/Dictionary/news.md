# 新闻字典

### 英文名称

**中文名称** 描述信息

---

### title

**标题** 新闻标题的表述.

* string

### source

**来源** 新闻来源的表述.

* string

### publishUserGroup

**发布单位** 新闻发布委办局的表述,此处指的是我们系统中的委办局.

* UserGroup

### content

**内容** 新闻内容的表述.

* string

### image

**图片** 新闻图片的表述.

* array，如 `array("name" => "图片名称", "identify" => "图片标识")`

### attachments

**附件** 新闻附件的表述.

* array，如 

```
array(
	array("name" => "图片名称", "identify" => "图片标识"),
	array("name" => "图片名称", "identify" => "图片标识")
)
```

### status

**状态** 新闻状态的表述.

* int

	* ENABLED | 启用 | 0
	* DISABLED | 禁用 | -2

### [更新时间](./common.md "更新时间")

### [创建时间](./common.md "创建时间")
