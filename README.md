# 热点文章采集器

> 最新版已经更新：2026年05月20日
> 一个轻量级的在线热点文章爬虫，支持多个新闻源，自动提取标题、摘要、发布时间和原文链接。

## ✨ 特性

- 📰 支持多个主流新闻/技术资讯源（可配置）
- 🔍 自动去重，避免重复采集同一文章
- ⏱️ 可定时执行采集任务（支持 cron 表达式）
- 💾 输出格式：JSON / CSV / 数据库（MySQL、SQLite）
- 🛡️ 基础的 User-Agent 轮换和请求间隔控制，降低被封风险
- 📦 轻量依赖，仅需 Python 3.8+ 及 requests、BeautifulSoup

## 🚀 快速开始

### 环境要求

- Python 3.8 或更高版本
- pip（Python 包管理器）



贡献者以及来源：

影视剧场	Wap.aiyvvs.cn/Blog/382491.SHTML
台湾香港澳门	Wap.ftfftm.cn/Blog/730709.SHTML
国外电视台	Wap.lrqor.cn/Blog/835551.SHTML
国内电视台	Wap.yunianan.cn/Blog/626195.SHTML
更早期2026-05-12更新	Wap.meimmtg.cn/Blog/967534.SHTML
各地运营商IPTV直播源	Wap.jatqs.cn/Blog/552501.SHTML
全国可用直播源	Wap.zk-cloud.cn/Blog/447278.SHTML
2026-05-12更新	Wap.fromcode.cn/Blog/199560.SHTML
赞助者	Wap.ygzreadb.com/Blog/575133.SHTML
文章	Wap.byhbuy.com/Blog/379231.SHTML
视频教程	Wap.toolsver.com/Blog/288620.SHTML
插件	Wap.lhufery.top/Blog/328249.SHTML
工具	Wap.izzy.top/Blog/327716.SHTML
URL	Wap.sitr.top/Blog/229041.SHTML
目录	Wap.jebn.top/Blog/176548.SHTML
喀麦隆直播电视频道	Wap.haokaji.com/Blog/508262.SHTML
阿富汗直播电视频道	Wap.jinsangui.com/Blog/319673.SHTML
海地的直播频道	Wap.jingluoxuan.com/Blog/101224.SHTML
高棉直播和泰国电视，电影和电视剧	Wap.zujiniu.com/Blog/812711.SHTML
厄瓜多尔直播频道	Wap.suersi.com/Blog/515226.SHTML
玻利维亚直播频道	Wap.tflxb.com/Blog/889814.SHTML
萨尔瓦多直播频道	Wap.cuijiacheng.com/Blog/536140.SHTML
危地马拉直播频道	Wap.kanglianqi.com/Blog/167887.SHTML
洪都拉斯直播频道	Wap.aihouning.com/Blog/313777.SHTML
多米尼加共和国直播频道	Wap.aiduwang.com/Blog/177967.SHTML
哥斯达黎加直播频道	Wap.aiyvvs.cn/Blog/936174.SHTML
来自世界各地的个电视频道和个摄像机	Wap.ftfftm.cn/Blog/575828.SHTML
免费数据库	Wap.lrqor.cn/Blog/452830.SHTML
公共链接到互联网上传输的个线性电视频道和个线性无线电频道	Wap.yunianan.cn/Blog/724592.SHTML
超过个国家地区的个高清频道和	Wap.meimmtg.cn/Blog/264312.SHTML
超过个直播电视频道影视节目	Wap.jatqs.cn/Blog/776004.SHTML
提供商列表	Wap.zk-cloud.cn/Blog/950171.SHTML
提供者	Wap.fromcode.cn/Blog/525809.SHTML
客户端服务器媒体播放器	Wap.ygzreadb.com/Blog/432618.SHTML
支持播放列表文件	Wap.byhbuy.com/Blog/231762.SHTML
启用投屏的应用程序，可让您将收藏的视频从移动设备流式传输到电视	Wap.toolsver.com/Blog/541239.SHTML
完整的用户定义的高级IPTV解决方案，用于实时和非实时电视流	Wap.lhufery.top/Blog/106879.SHTML
点 即可	Wap.izzy.top/Blog/688903.SHTML
第三行不用管	Wap.sitr.top/Blog/175962.SHTML
第二行输入上面给你的地址	Wap.jebn.top/Blog/300312.SHTML
第一行随意输入一个名字	Wap.haokaji.com/Blog/508564.SHTML
选择 远程播放列表文件	Wap.jinsangui.com/Blog/285712.SHTML
打开 点击 号	Wap.jingluoxuan.com/Blog/469315.SHTML
食用指南	Wap.zujiniu.com/Blog/751958.SHTML
适用于macOS的现代媒体播放器	Wap.suersi.com/Blog/584689.SHTML
直播电视和广播客户端插件	Wap.tflxb.com/Blog/610494.SHTML
具有库支持的免费跨平台媒体播放器	Wap.cuijiacheng.com/Blog/599566.SHTML
免费开放源代码的便携式跨平台媒体播放器	Wap.kanglianqi.com/Blog/960089.SHTML
支持IPTV流的应用程序	Wap.aihouning.com/Blog/594545.SHTML
工具	Wap.aiduwang.com/Blog/911952.SHTML
轮播华数求索爱奇艺2026-05-12更新	Wap.aiyvvs.cn/Blog/608597.SHTML
台湾、香港、澳门、韩国、日本、美国、加拿大、英国、意大利、德国、法国、西班牙、南美等国	Wap.ftfftm.cn/Blog/234512.SHTML
台湾香港海外直播源2026-05-12更新	Wap.lrqor.cn/Blog/809424.SHTML
各大卫视、上千个地方台	Wap.yunianan.cn/Blog/636759.SHTML
国内电视台直播源2026-05-12更新	Wap.meimmtg.cn/Blog/944584.SHTML
卫视腾讯云	Wap.jatqs.cn/Blog/903040.SHTML
卫视平顶山学院教育网	Wap.zk-cloud.cn/Blog/791152.SHTML
卫视天途云	Wap.fromcode.cn/Blog/711101.SHTML
卫视地方台安徽农大	Wap.ygzreadb.com/Blog/133489.SHTML
卫视北京凤凰探索星空卫视北京邮电大学校园网	Wap.byhbuy.com/Blog/734427.SHTML
央视卫视广西移动直播源	Wap.toolsver.com/Blog/897072.SHTML
付费频道直播源	Wap.lhufery.top/Blog/673263.SHTML
国家直播源多个全部有效	Wap.izzy.top/Blog/963594.SHTML
直播源全部有效	Wap.sitr.top/Blog/362932.SHTML
全部有效	Wap.jebn.top/Blog/786662.SHTML
直播源全部有效老电脑别用	Wap.haokaji.com/Blog/450954.SHTML
影视剧场全部流畅	Wap.jinsangui.com/Blog/840807.SHTML
全部可用	Wap.jingluoxuan.com/Blog/711118.SHTML
我的播放源	Wap.zujiniu.com/Blog/754005.SHTML
其他直播源 不确定有效性	Wap.suersi.com/Blog/885902.SHTML
新疆电信组播IPTV直播源下载地址	Wap.tflxb.com/Blog/591107.SHTML
新疆IPTV直播源	Wap.cuijiacheng.com/Blog/169326.SHTML
内蒙古联通udp组播下载地址	Wap.kanglianqi.com/Blog/380956.SHTML
内蒙古联通IPTV直播源下载地址	Wap.aihouning.com/Blog/150252.SHTML
内蒙古电信组播IPTV直播源下载地址	Wap.aiduwang.com/Blog/594818.SHTML
内蒙古电信IPTV直播源下载地址	Wap.aiyvvs.cn/Blog/215819.SHTML
内蒙古IPTV直播源	Wap.ftfftm.cn/Blog/490712.SHTML
黑龙江联通组播IPTV直播源下载地址	Wap.lrqor.cn/Blog/378870.SHTML
黑龙江移动3IPTV直播源下载地址	Wap.yunianan.cn/Blog/373989.SHTML
黑龙江移动2IPTV直播源下载地址	Wap.meimmtg.cn/Blog/966542.SHTML
黑龙江移动IPTV直播源下载地址	Wap.jatqs.cn/Blog/759374.SHTML
黑龙江IPTV直播源	Wap.zk-cloud.cn/Blog/558160.SHTML
吉林电信组播IPTV直播源下载地址	Wap.fromcode.cn/Blog/339510.SHTML
吉林IPTV直播源	Wap.ygzreadb.com/Blog/808853.SHTML
辽宁移动直播源下载地址	Wap.byhbuy.com/Blog/934792.SHTML
辽宁电信IPTV直播源下载地址	Wap.toolsver.com/Blog/917148.SHTML
辽宁大连联通IPTV组播直播源下载地址	Wap.lhufery.top/Blog/670927.SHTML
辽宁联通组播IPTV直播源下载地址	Wap.izzy.top/Blog/901644.SHTML
辽宁联通IPTV直播源下载地址	Wap.sitr.top/Blog/504124.SHTML
辽宁IPTV直播源	Wap.jebn.top/Blog/337151.SHTML
浙江电信组播IPTV组播直播源下载地址	Wap.haokaji.com/Blog/684227.SHTML
浙江电信IPTV组播直播源下载地址	Wap.jinsangui.com/Blog/383343.SHTML
浙江联通IPTV直播源下载地址	Wap.jingluoxuan.com/Blog/502051.SHTML
浙江移动IPTV直播源下载地址	Wap.zujiniu.com/Blog/721528.SHTML
浙江IPTV直播源	Wap.suersi.com/Blog/680715.SHTML
江西联通IPTV直播源下载地址	Wap.tflxb.com/Blog/625100.SHTML
江西电信组播IPTV直播源下载地址	Wap.cuijiacheng.com/Blog/345390.SHTML
江西电信IPTV直播源下载地址	Wap.kanglianqi.com/Blog/864883.SHTML
江西移动IPTV直播源下载地址	Wap.aihouning.com/Blog/268473.SHTML
江西IPTV直播源	Wap.aiduwang.com/Blog/656546.SHTML
江苏移动IPTV直播源下载地址	Wap.aiyvvs.cn/Blog/287807.SHTML
江苏电信组播IPTV直播源下载地址	Wap.ftfftm.cn/Blog/353749.SHTML
江苏泰州电信IPTV直播源下载地址	Wap.lrqor.cn/Blog/472063.SHTML
江苏南京电信2IPTV直播源下载地址	Wap.yunianan.cn/Blog/305724.SHTML
江苏南京电信IPTV直播源下载地址	Wap.meimmtg.cn/Blog/834510.SHTML
江苏电信IPTV直播源下载地址	Wap.jatqs.cn/Blog/425436.SHTML
江苏IPTV直播源	Wap.zk-cloud.cn/Blog/219675.SHTML
安徽广电IPTV直播源下载地址	Wap.fromcode.cn/Blog/764981.SHTML
海南电信组播IPTV直播源下载地址	Wap.ygzreadb.com/Blog/274675.SHTML
海南联通组播IPTV直播源下载地址	Wap.byhbuy.com/Blog/114159.SHTML
湖北IPTV直播源	Wap.toolsver.com/Blog/674061.SHTML
湖南电信组播直播源下载地址	Wap.lhufery.top/Blog/796577.SHTML
湖南电信IPTV直播源下载地址	Wap.izzy.top/Blog/175813.SHTML
湖南联通组播IPTV直播源下载地址	Wap.sitr.top/Blog/396923.SHTML
湖南联通IPTV直播源下载地址	Wap.jebn.top/Blog/961415.SHTML
湖南移动IPTV直播源下载地址	Wap.haokaji.com/Blog/797743.SHTML
湖南IPTV直播源	Wap.jinsangui.com/Blog/330968.SHTML
重庆移动组播直播源下载地址	Wap.jingluoxuan.com/Blog/583054.SHTML
重庆联通组播直播源下载地址	Wap.zujiniu.com/Blog/820783.SHTML
重庆联通直播源下载地址	Wap.suersi.com/Blog/175960.SHTML
重庆电信组播直播源下载地址	Wap.tflxb.com/Blog/202002.SHTML
重庆电信直播源下载地址	Wap.cuijiacheng.com/Blog/811691.SHTML
重庆IPTV直播源	Wap.kanglianqi.com/Blog/731816.SHTML
四川移动组播IPTV直播源下载地址	Wap.aihouning.com/Blog/394365.SHTML
四川电信IPTV直播源下载地址	Wap.aiduwang.com/Blog/329052.SHTML
四川电信IPTV组播直播源下载地址	Wap.aiyvvs.cn/Blog/197940.SHTML
四川广电IPTV直播源下载地址	Wap.ftfftm.cn/Blog/833158.SHTML
四川联通组播IPTV直播源下载地址	Wap.lrqor.cn/Blog/707025.SHTML
四川联通IPTV直播源下载地址	Wap.yunianan.cn/Blog/566880.SHTML
四川IPTV直播源	Wap.meimmtg.cn/Blog/394925.SHTML
云南电信组播IPTV直播源下载地址	Wap.jatqs.cn/Blog/864267.SHTML
云南移动IPTV直播源下载地址	Wap.zk-cloud.cn/Blog/974944.SHTML
云南IPTV直播源	Wap.fromcode.cn/Blog/706442.SHTML
贵州电信组播IPTV直播源下载地址	Wap.ygzreadb.com/Blog/410416.SHTML
贵州移动IPTV直播源	Wap.byhbuy.com/Blog/624629.SHTML
贵州联通组播IPTV直播源下载地址	Wap.toolsver.com/Blog/298554.SHTML
贵州联通IPTV直播源下载地址	Wap.lhufery.top/Blog/670888.SHTML
贵州IPTV直播源	Wap.izzy.top/Blog/898972.SHTML
福建联通组播IPTV直播源下载地址	Wap.sitr.top/Blog/454212.SHTML
福建联通IPTV直播源下载地址	Wap.jebn.top/Blog/762277.SHTML
福建移动IPTV直播源下载地址	Wap.haokaji.com/Blog/809686.SHTML
福建电信组播IPTV直播源下载地址	Wap.jinsangui.com/Blog/518562.SHTML
福建电信IPTV直播源下载地址	Wap.jingluoxuan.com/Blog/836922.SHTML
福建IPTV直播源	Wap.zujiniu.com/Blog/776695.SHTML
安徽移动IPTV直播源下载地址	Wap.suersi.com/Blog/485821.SHTML
安徽电信IPTV组播直播源下载地址	Wap.tflxb.com/Blog/572180.SHTML
安徽电信IPTV直播源下载地址	Wap.cuijiacheng.com/Blog/498191.SHTML
安徽联通IPTV直播源下载地址	Wap.kanglianqi.com/Blog/667003.SHTML
安徽IPTV直播源	Wap.aihouning.com/Blog/250698.SHTML
陕西地方台直播源下载地址	Wap.aiduwang.com/Blog/160272.SHTML
陕西电信组播IPTV直播源下载地址	Wap.aiyvvs.cn/Blog/700195.SHTML
陕西电信IPTV直播源下载地址	Wap.ftfftm.cn/Blog/676086.SHTML
陕西移动组播IPTV直播源下载地址	Wap.lrqor.cn/Blog/490412.SHTML
陕西移动IPTV直播源下载地址	Wap.yunianan.cn/Blog/890556.SHTML
陕西IPTV直播源	Wap.meimmtg.cn/Blog/481318.SHTML
甘肃电信组播IPTV直播源下载地址	Wap.jatqs.cn/Blog/884664.SHTML
甘肃移动IPTV直播源下载地址	Wap.zk-cloud.cn/Blog/812965.SHTML
甘肃IPTV直播源	Wap.fromcode.cn/Blog/919601.SHTML
山西移动组播IPTV直播源下载地址	Wap.ygzreadb.com/Blog/970851.SHTML
山西联通组播IPTV直播源下载地址	Wap.byhbuy.com/Blog/966674.SHTML
山西联通IPTV直播源下载地址	Wap.toolsver.com/Blog/368257.SHTML
山西IPTV直播源	Wap.lhufery.top/Blog/978616.SHTML
天津电信组播直播源下载地址	Wap.izzy.top/Blog/439430.SHTML
天津联通组播直播源下载地址	Wap.sitr.top/Blog/863173.SHTML
天津IPTV直播源	Wap.jebn.top/Blog/948783.SHTML
上海移动直播源下载地址	Wap.haokaji.com/Blog/816567.SHTML
上海联通组播直播源下载地址	Wap.jinsangui.com/Blog/804042.SHTML
上海联通直播源下载地址	Wap.jingluoxuan.com/Blog/758810.SHTML
上海电信组播直播源下载地址	Wap.zujiniu.com/Blog/743971.SHTML
上海电信直播源下载地址	Wap.suersi.com/Blog/191937.SHTML
上海IPTV直播源	Wap.tflxb.com/Blog/984198.SHTML
北京移动IPTV直播源下载地址	Wap.cuijiacheng.com/Blog/241563.SHTML
北京移动组播直播源下载地址	Wap.kanglianqi.com/Blog/896321.SHTML
北京电信组播IPTV直播源下载地址	Wap.aihouning.com/Blog/824292.SHTML
北京联通组播IPTV直播源下载地址	Wap.aiduwang.com/Blog/650437.SHTML
北京联通IPTV直播源下载地址	Wap.aiyvvs.cn/Blog/756279.SHTML
北京IPTV直播源	Wap.ftfftm.cn/Blog/326911.SHTML
部分地区的移动可全网通用	Wap.lrqor.cn/Blog/911560.SHTML
各地运营商 IPTV 直播源，速度稳定画质好，选择你所在地宽带运营商	Wap.yunianan.cn/Blog/871313.SHTML
广播电台下载地址	Wap.meimmtg.cn/Blog/707367.SHTML
国内景区直播源下载地址	Wap.jatqs.cn/Blog/159221.SHTML
轮播华数黑莓下载地址	Wap.zk-cloud.cn/Blog/639251.SHTML
台湾香港澳门电视台直播源下载地址	Wap.fromcode.cn/Blog/129963.SHTML
韩国、日本、美国、加拿大、英国、意大利、德国、法国、西班牙、南美、俄罗斯、中东等	Wap.ygzreadb.com/Blog/728065.SHTML
国外电视台直播源下载地址	Wap.byhbuy.com/Blog/870573.SHTML
卫视地方台安徽农大下载地址	Wap.toolsver.com/Blog/886867.SHTML
卫视北京凤凰探索星空卫视北京邮电大学校园网下载地址	Wap.lhufery.top/Blog/875371.SHTML
卫视上海源下载地址	Wap.izzy.top/Blog/871003.SHTML
卫视重庆广电 下载地址	Wap.sitr.top/Blog/337016.SHTML
卫视百视TV 下载地址	Wap.jebn.top/Blog/425637.SHTML
移动 IPv6 直播源下载地址	Wap.haokaji.com/Blog/956473.SHTML
国内电视台 IPv6 直播源下载地址	Wap.jinsangui.com/Blog/969554.SHTML
各大卫视、上千个地方台	Wap.jingluoxuan.com/Blog/441590.SHTML
国内电视台直播源下载地址	Wap.zujiniu.com/Blog/191956.SHTML
全国可用直播源	Wap.suersi.com/Blog/511526.SHTML
包括完整内容所有已知频道	Wap.tflxb.com/Blog/737430.SHTML
除成人内容以外的已知频道	Wap.cuijiacheng.com/Blog/640883.SHTML
收集来自世界各地公开可用的IPTV	Wap.kanglianqi.com/Blog/345683.SHTML
稳定地址	Wap.aihouning.com/Blog/230470.SHTML
2026-05-12更新 CCTV等世界杯相关HD播放源	Wap.aiduwang.com/Blog/110398.SHTML
2026-05-12更新 IPTV 工具	Wap.aiyvvs.cn/Blog/196451.SHTML
2026-05-12更新世界各地 IPTV 频道	Wap.ftfftm.cn/Blog/622289.SHTML
2026-05-12更新全国可用直播源	Wap.lrqor.cn/Blog/110930.SHTML
新增各地运营商的 IPTV 地址	Wap.yunianan.cn/Blog/147790.SHTML
插件推荐	Wap.meimmtg.cn/Blog/189947.SHTML
视频教程增加	Wap.jatqs.cn/Blog/184519.SHTML
咪咕源失效	Wap.zk-cloud.cn/Blog/918672.SHTML
2026-05-12更新各地运营商 IPTV 直播源	Wap.fromcode.cn/Blog/530711.SHTML
2026-05-12更新台湾香港海外直播源	Wap.ygzreadb.com/Blog/756711.SHTML
新增辽宁广电直播源	Wap.byhbuy.com/Blog/383938.SHTML
新增江西广电直播源	Wap.toolsver.com/Blog/560862.SHTML
新增湖北广电直播源	Wap.lhufery.top/Blog/185783.SHTML
新增中国广电cctv+卫视直播源	Wap.izzy.top/Blog/260061.SHTML
新增辽宁电信IPTV直播源	Wap.sitr.top/Blog/776140.SHTML
2026-05-12更新台湾香港海外直播源	Wap.jebn.top/Blog/101412.SHTML
新增辽宁移动直播源	Wap.haokaji.com/Blog/772613.SHTML
新增浙江杭州华数IPTV直播源	Wap.jinsangui.com/Blog/132878.SHTML
新增广东联通IPTV直播源	Wap.jingluoxuan.com/Blog/453585.SHTML
新增四川广电IPTV直播源	Wap.zujiniu.com/Blog/673904.SHTML
新增云南电信IPTV直播源	Wap.suersi.com/Blog/317245.SHTML
2026-05-12更新国内电视台直播源	Wap.tflxb.com/Blog/861827.SHTML
新增福建电信IPTV直播源	Wap.cuijiacheng.com/Blog/712246.SHTML
新增天途云CCTV+卫视	Wap.kanglianqi.com/Blog/643845.SHTML
新增腾讯云CCTV+卫视	Wap.aihouning.com/Blog/300624.SHTML
新增CCTV付费频道直播源	Wap.aiduwang.com/Blog/258065.SHTML
新增广播电台	Wap.aiyvvs.cn/Blog/857082.SHTML
2026-05-12更新 轮播爱奇艺CIBN华数NewTV虎牙战旗	Wap.ftfftm.cn/Blog/526216.SHTML
2026-05-12更新 台湾香港海外直播源	Wap.lrqor.cn/Blog/367319.SHTML
2026-05-12更新 国内电视台直播源	Wap.yunianan.cn/Blog/159912.SHTML
国家直播源	Wap.meimmtg.cn/Blog/133258.SHTML
直播源	Wap.jatqs.cn/Blog/160565.SHTML
影视剧场	Wap.zk-cloud.cn/Blog/530240.SHTML
台湾香港澳门	Wap.fromcode.cn/Blog/126332.SHTML
国外电视台	Wap.ygzreadb.com/Blog/432983.SHTML
国内电视台	Wap.byhbuy.com/Blog/255749.SHTML
更早期2026-05-12更新	Wap.toolsver.com/Blog/255955.SHTML
各地运营商IPTV直播源	Wap.lhufery.top/Blog/952092.SHTML
提供所有优质的英国，爱尔兰，德国，土耳其，阿拉伯语，美国和加拿大频道	Wap.izzy.top/Blog/207940.SHTML
超过个俄罗斯频道和天的节目存档	Wap.sitr.top/Blog/536269.SHTML
起初这里仅收录美加墨世界杯直播地址，配合赛程比分对阵供调用	Wap.jebn.top/Blog/744305.SHTML
后来疫情来了，这里又增加了世界各国公共频道，及国内部分区域IPTV，希望带给隔离中的些许心理依托	Wap.haokaji.com/Blog/353430.SHTML
然后转眼三年了，还这样子，且没有转好的迹象 相信这段浓墨重彩的一笔世人铭记	Wap.jinsangui.com/Blog/400054.SHTML
眼下 美加墨世界杯	Wap.jingluoxuan.com/Blog/722429.SHTML
再次祝愿所有人百毒不侵 希望动态清零早日过去，请大家务必坚信明天是崭新的	Wap.zujiniu.com/Blog/899823.SHTML
这个项目的存在要感谢所有贡献者	Wap.suersi.com/Blog/649294.SHTML
请给我们一个 点赞支持我们 谢谢	Wap.tflxb.com/Blog/536468.SHTML
并感谢所有支持者}更新于2026-05-1604	Wap.cuijiacheng.com/Blog/219137.SHTML
来源	Wap.kanglianqi.com/Blog/258801.SHTML
来源	Wap.aihouning.com/Blog/228016.SHTML
来源	Wap.aiduwang.com/Blog/978712.SHTML
