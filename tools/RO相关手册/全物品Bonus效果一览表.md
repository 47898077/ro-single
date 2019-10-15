# 全物品 Bonus 效果一览表

------


## 装备相关

| 脚本命令 | 效果 |
|:--------|:-----|
| `bonus bBreakWeaponRate,n;` | 以n的机率破坏玩家的武器（n为万分率，机率可叠加） |
| `bonus bBreakArmorRate,n;` | 以n的机率破坏玩家的铠甲（n为万分率，机率可叠加） |
| `bonus bUnbreakableWeapon,n;` | 武器绝对不会被破坏（n无意义） |
| `bonus bUnbreakableArmor,n;` | 铠甲绝对不会被破坏（n无意义） |
| `bonus bUnbreakableHelm,n;` | 头具绝对不会被破坏（n无意义） |
| `bonus bUnbreakableShield,n;` | 盾牌绝对不会被破坏（n无意义） |
| `bonus bLossEquipWhenDie,n;` | 死亡时n机率装备消失（n为万分率） |
| `bonus bLossEquipWhenAttack,n;` | 攻击时n机率装备消失（n为万分率） |
| `bonus bLossEquipWhenHit,n;` | 受到攻击时n机率装备消失（n为万分率） |
| `bonus bBreakMyEquipWhenAttack,n,x;` | 攻击时n机率装备损坏（n为万分率）
| `bonus2 bBreakMyEquipWhenAttack,n,x;` | 攻击时x机率损坏n位置的装备（x为万分率）<br/>（456-头具、7-铠甲、8-左手、9-右手、其他位置-无意义） |
| `bonus bBreakMyEquipWhenHit,n;` | 受到攻击时n机率装备损坏（n为万分率） |
| `bonus2 bBreakMyEquipWhenHit,n,x;` | 受到攻击时x机率损坏n位置的装备（x为万分率）<br/>（456-头具、7-铠甲、8-左手、9-右手、其他位置-无意义） |


## 状态异常
　
bonus2 bAddEff,e,n;	以n的机率造成攻击对象e状态（n为万分率）
bonus2 bAddRevEff,e,n;	受到近身物理攻击时，n机率让攻击对象陷入e状态（n为万分率）
bonus2 bAddEff2,e,n;	以n机率造成自己e状态（n为万分率）
bonus2 bAddEffShort,e,n;	近距离物理攻击时，n机率造成攻击对象e状态（n为万分率）
bonus2 bAddEffLong,e,n;	远距离物理攻击时，n机率造成攻击对象e状态（n为万分率）
bonus2 bResEff,e,n;	e状态的耐久度+n（n为万分率）
Eff_Blind     - 黑暗
Eff_Sleep     - 睡眠
Eff_Poison    - 中毒
Eff_Freeze    - 冰冻
Eff_Silence   - 沉默
Eff_Stan      - 昏眩
Eff_Curse     - 诅咒
Eff_Confusion - 混乱
Eff_Stone     - 石化
Eff_Bleed     - 出血
　
bonus bCurseByMuramasa,n;	Lv>Luk时，n机率被诅咒（n为万分率）
　

　

·即死/濒死
　
bonus2 bWeaponComaEle,n,x;	对n属性以x机率发动濒死之术[HP=1,SP=1]（x为万分率，可叠加）
bonus2 bWeaponComaEle2,n,x;	对n属性以x机率发动濒死之术[HP=1]（x为万分率，可叠加）
0-无、1-水、2-土、3-火、4-风、5-毒、6-圣、7-暗、8-念、9-不死
　
bonus2 bWeaponComaRace,n,x;	对n种族以x机率发动濒死之术[HP=1,SP=1]（x为万分率，可叠加）
bonus2 bWeaponComaRace2,n,x;	对n种族以x机率发动濒死之术[HP=1]（x为万分率，可叠加）
0-无形、1-不死、2-动物、3-植物、4-昆虫、5-鱼贝、6-恶魔、7-人形、8-天使、9-龙族、10-BOSS、11-BOSS以外[普通的怪物，包括玩家]
　

　

·Zeny获得
　
bonus bGetZenyNum,n;	物理攻击打倒怪物得到怪物Lv*10+rand()%n的Zeny
bonus bAddGetZenyNum,n;	物理攻击打倒怪物得到怪物Lv*10+rand()%n的Zeny（可叠加）
bonus bGetZenyNum2,n;	物理攻击打倒怪物时，n%的机率得到怪物Lv*10的Zeny
bonus bAddGetZenyNum2,n;	物理攻击打倒怪物时，n%的机率得到怪物Lv*10的Zeny（可叠加）
　

　

·物品获得
　
bonus3 bAddMonsterDropItem,n,x,y;	物理攻击打倒x种族的怪物，有y机率掉落物品n（y为万分率，与怪物掉落物品无关系）
0-无形、1-不死、2-动物、3-植物、4-昆虫、5-鱼贝、6-恶魔、7-人形、8-天使、9-龙族、10-BOSS、11-BOSS以外[普通的怪物，包括玩家]
　

　

·追加经验值
　
bonus2 bExpRate,n,x;	杀死n种族怪物时，增加x%的Base经验（可叠加）
bonus2 bJobRate,n,x;	杀死n种族怪物时，增加x%的Job经验（可叠加）
bonus2 bExpRate,n,x;	杀死n种族怪物时，增加x%的Base经验（可叠加）
bonus2 bJobRate,n,x;	杀死n种族怪物时，增加x%的Job经验（可叠加）
0-无形、1-不死、2-动物、3-植物、4-昆虫、5-鱼贝、6-恶魔、7-人形、8-天使、9-龙族、10-全种族
　

　

·其他
　
bonus bNoSizeFix,n;	不受到怪物体型的伤害修正（n无意义）
bonus bMobClassChange,n;	攻击时以n机率把当前怪物变为其他怪物（n为万分率）
bonus bInfiniteEndure,n;	无限霸体（n无意义）
bonus bTigereye,n;	可以看到隐匿或伪装的怪物和玩家（n无意义）
bonus bItemNoUse,n;	无法使用物品（n无意义）
bonus bFixDamage,n;	物理攻击时打出n的固定伤害
bonus bNoKnockback,n;	无法被吹飞或击退（n无意义）
　

　

·特殊
　
bonus bAutoStatusCalcPc,n;	强制设置状态n
        例：装备其间处于圣母的祈福状态
        ,{},{ bonus bAutoStatusCalcPc,110; sc_start 110,1000,0; }
        ※bAutoStatusCalcPc和bEternalStatusChange的不同：bEternalStatusChange能实现永久的效果。

bonus2 bEternalStatusChange,n,x;	强制设置状态n持续x毫秒（x的范围是1-30000，超出范围时自动初始化为1000）
        例：装备其间处于圣母的祈福状态
        ,{},{ bonus2 bEternalStatusChange,110,1000; sc_start 110,1000,0; }
        ※bAutoStatusCalcPc和bEternalStatusChange的不同：bEternalStatusChange能实现永久的效果。