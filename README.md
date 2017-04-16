# 新同文堂 Php
這是從 [新同文堂 Native ](https://github.com/tgckpg/New-Tongwentang-Native) 衍生出來的版本

速度跟 native ( `-Ofast` ) 有得拼！
```
+----------------+----------------+
|     Native     |      PHP       |
|----------------+----------------+
|   0: 0.3417s   |   0: 0.3201s   |
|   1: 0.3065s   |   1: 0.3205s   |
|   2: 0.3061s   |   2: 0.3225s   |
|   3: 0.3087s   |   3: 0.3203s   |
|   4: 0.3056s   |   4: 0.3215s   |
|   5: 0.3058s   |   5: 0.3203s   |
|   6: 0.3088s   |   6: 0.3201s   |
|   7: 0.3092s   |   7: 0.3196s   |
|   8: 0.3054s   |   8: 0.321s    |
|   9: 0.3081s   |   9: 0.3238s   |
+----------------+----------------+
|  Avg: 0.3106s  |  Avg: 0.321s   |
+----------------+----------------+
```

### 用法
請先執行 `php codegen.php` 以生成對照表 ( `wtable.php` )。 

```Php
<?php
include "wconv.php";

echo ToHans( "蜘蛛是螯肢亞門節肢動物，有兩個體段，八條腿，但沒有咀嚼器官。截至2014年，共有114科3,935属44,906种[1]。蜘蛛目是蛛形纲中数量最多的一个目。研究蜘蛛的學科稱作蜘蛛學。" );
echo ToHant( "蜘蛛是螯肢亚门节肢动物，有两个体段，八条腿，但没有咀嚼器官。截至2014年，共有114科3,935属44,906种[1]。蜘蛛目是蛛形纲中数量最多的一个目。研究蜘蛛的学科称作蜘蛛学。" );

```
