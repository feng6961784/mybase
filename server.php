<?php
/**
 * 会员中心的所有功能API接口
 *
 *错误代码列表
 * 1表示成功true 0表示失败false  -1游戏API查询失败
 * 1001帐号密码错误。 1002会员帐号被锁定。1003游戏帐号未激活。1004游戏密码修改失败。1005帐号绑定银行信息超出。1006会员信息已存在
 * 1007会员信息不存在 1008验证码过期 1009验证码错误 1010密码不一致
 *
 * 1011主账户余额不足 1012游戏帐号余额不足 1013数据错误，存在特殊字符 1014会员字段不存在 1015取款密码不存在 1016取款密码锁定 1017vip等级到达上限 1018获取K币不足 1019存款不足
 * 1021提款已审核，无法自助取消 1022条件不满足 1023无免费筹码 1024已领取
 * 1031客户积分没达到规定值或者该月兑换已满上限 1032积分不足，或者小于最低积分 1033抽奖次数不足 1034抽奖锁定 1035抽奖超时 1036抽奖关闭
 * 1041老虎机救援-数据不正确 1042存在未审核或通过的取款 1043有玩过其他非老虎机平台
 * 1044规则不匹配余额大于规定余额 1045规则不匹配存款减去取款大于规定值 1046昨日救援金已申请 1047自动优惠已申请 1048自动优惠存款金额小于最低值
 * 1051转账列表已锁定
 * 1061优惠活动已结束 1062优惠活动正在审核 1063只允许申请一次的优惠 1064一周内存款金额不足 1065推荐人数不足 1066 返水金额不足 1067 已经领取过推荐人优惠
 * 1071支付线路不可用
 * 1081解绑失败帐号和ID不匹配
 * 1091积分不足
 *
 *
 * 1101 游戏维护  1102 游戏API查询失败
 *
 *
 * 2000 数据库update失败。2001 存储过程运行失败。2002 数据插入失败。2003 数据删除失败。
 */

$server->add(array(
    "member_regist", //会员注册
    "check_member_info",    //验证会员信息
    "get_notice",   //获取公告
    "get_notice_content",   //获取公告内容
    "member_login", //会员登录
    "change_password",  //会员修改密码
    "forget_account",   //会员忘记密码
    "noread_message",   //查询未读消息
    "record_list",  //获取记录列表
    "get_balance",  //获取会员或游戏余额
    "info_center",  //网页顶部 会员信息
    "member_sign",  //会员签到
    "get_message",  //会员 站内信
    "get_message_content",  //会员 站内信 内容
    "get_member_info",  //会员 获取会员信息
    "get_member_bank",  //会员 获取会员取款银行
    "bind_bank_card",  //会员 绑定取款银行
    "unbind_bank_card", //会员解绑银行卡
    "member_debit", //会员 申请取款
    "member_cancel_debit",  //会员 自助取消提款
    "get_transfer_list",    //获取转账列表
    "transfer", //会员 游戏转账
    "transfer_sign",    //会员 签到金转换
    "point_exchange",   //会员 积分兑换
    "apply_rescue",   //会员 救援金申请
    "get_promotion",    //会员获取优惠信息和内容
    "apply_promotion",  //会员 申请优惠
    "game_login",  //会员 获取游戏登录地址或者TICKET
    "onlinepay_submit", //会员 在线支付提交
    "onlinepay_sure", //会员 在线支付 返回确认
    "get_onlinepay_bank",   //会员 获取 在线支付 的 银行信息
    "get_onlinepay_list",   //会员 获取 在线支付 列表
    "get_password",     //会员 获取玩家密码
    "get_ag_password",     //会员 获取 AG 密码  用于登录下载版
    "get_deposit_bank", //会员 获取存款银行信息
    "deposit_bank", //会员 银行存款 提交
    "record_phone", //前台记录要回拨的电话号码
    "gameapi_unlock",   //游戏解锁
    "gameapi_active",   //游戏激活
    "gameapi_password", //游戏密码同步
    "get_cache",   //获取缓存信息
    "send_sms",     //发送手机短信
    "point_prize",  //积分抽奖活动
    "subscribe_email",//订阅邮件功能
    "get_recommend_info",//申请好友推荐礼金，查询是否满足 个人总存款超过500元 和 5个好友
    "apply_recommend_promotion",//申请好友推荐礼金优惠
    "apply_recommend_amount",//申请好友推荐礼金，满5人自动领取
    "apply_batch_promotion",//领取批量优惠金额
    "washcode_pool",//自助返水金额池
    "receive_washcode",//自助反水领取
    "forget_account_check",//忘记密码 验证码确认
    "reset_password",//重置登录密码
    "insert_daily_report",//写入日常会员报表数据
    "get_auto_deposit",//获取自动存款表单 用于自动到账软件
    "update_auto_deposit",//更新自动存款信息 用于自动到账软件
    "get_auto_bank_list",//获取自动存款银行列表 用于自动到账软件
    "deposit_auto_bank",//提交自动存款信息 用于自动到账软件
    "member_bind_information",//会员完善信息 新接口
    "member_debit_password",//会员取款密码
    "check_debit_password",//获取会员取款密码
    "verify_email",//验证玩家邮箱地址
    "deposit_remind",//存款催帐功能
    "get_vip_condition",//新VIP模块 获取VIP升级条件
    "upgrade_vip",//新VIP模块 VIP自助升级
    "query_vip_gift",//新VIP模块 查询晋升礼金和每月礼金
    "get_vip_gift",//新VIP模块 获取晋升礼金和每月礼金
    "get_lottery_info",//新抽奖模块 获取基本信息
    "lottery_apply",//新抽奖模块 抽奖开始的初始化验证
    "lottery_submit",//新抽奖模块 抽奖完成的信息提交
    "test",
));



class server_api
{
    private $ip_status = 1; //值为0时，表示非白名单IP请求
    private $db;    //创建一个数据库连接

    function __construct()
    {
        self::check_iplist(); //验证IP是否属于白名单
        self::create_db();
    }

    /**
     * 会员注册
     * @param string $account 会员帐号
     * @param string $password 会员登录密码
     * @param array $data 数组内容 可变  sex,birthday,member_name,email,qq,phone,reg_ip,reg_addr,reg_time,reg_referrer,agent_account,friend_account,key_word
     *
     * @return array or error_code 返回会员信息或错误代码
     */
    public function member_regist($account, $password, $arr)
    {
        $password = simple_crypt($password);
        $this->db->where("account='$account'");
        $result = $this->db->getOne("ns_member", "id");
        if (is_array($result)) {
            return 1006;//会员帐号已注册
        } else {
            $info['account'] = $account;
            $info['account_pwd'] = $password;
            $info['login_time'] = $arr['reg_time'];
            $member_id = $this->db->insert("ns_member", $info);
            $arr['member_id'] = $member_id;
            $arr['member_account'] = $account;
            if ($arr['agent_account'] != "") {
                $agent_id = $arr['agent_account'];
                $this->db->where("id=" . $agent_id);
                $agentinfo = $this->db->getOne("ns_agent", "account");
                if (is_array($agentinfo)) {
                    $arr['agent_account'] = $agentinfo['account'];
                } else {
                    $arr['agent_account'] = "";
                }
            }
            //推荐好友信息
            if (isset($arr['friend_account']) && $arr['friend_account'] != "" && strlen($arr['friend_account']) <= 6) {
                $id = createFriendId($arr['friend_account'], 2);
                $this->db->where("id=" . $id);
                $friendinfo = $this->db->getOne("ns_member", "account");
                if (is_array($friendinfo)) {
                    $arr['friend_account'] = $friendinfo['account'];
                } else {
                    $arr['friend_account'] = "";
                }
            }
            error_log("#" . json_encode($arr) . "##\r\n", 3, "log/regist.log");
            $this->db->insert("ns_member_data", $arr);
            $this->creat_vip_info($account);
            $result = array(
                "account" => $account,
                "balance" => 0,
                "member_type" => 0,
            );
            return $result;
        }
    }

    /**
     * 检测会员信息是否存在 account,email,phone,qq
     * @param string $data 会员信息
     * @param string $field 信息自字段
     * @return code or error_code 错误代码
     */
    public function check_member_info($data, $field)
    {
        if ($field == "account_pwd") {
            $data = simple_crypt($data);
        }
        $this->db->where($field . "='$data'");
        $result = $this->db->getOne("view_member_detail", "id");
        if (is_array($result)) {
            return 1006;//会员信息存在
        } else {
            return 1007;//会员信息不存在
        }
    }

    /**
     * 获取网站公告
     * @param int $type 0获取1条，1获取前10条
     * @return 返回的是  info
     */
    public function get_notice($type = 0)
    {
        $this->db->where("notice_status=1");
        $this->db->orderBy("orderid", "ASC");
        if ($type == 1) {
            $result = $this->db->get("ns_notice", "10", "id,notice_title,add_time");
        } else {
            $result = $this->db->getOne("ns_notice", "notice_content");
        }
        return $result;
    }

    /**
     * 获取网站公告 内容
     * @param int $id
     * @return 返回的是  info
     */
    public function get_notice_content($id)
    {
        if (is_numeric($id)) {
            $this->db->where("id=" . $id);
            $result = $this->db->getOne("ns_notice", "id,notice_title,notice_content,add_time");
            return $result;
        } else {
            return false;
        }

    }

    /**
     * 会员登录
     * @param string $account 会员帐号
     * @param string $password 会员登录密码
     * @param array $data 数组内容 可变  account,login_ip,login_addr,login_time
     *
     * @return array or error_code 返回会员信息或错误代码
     */
    public function member_login($account, $password, $arr = array())
    {
        $password = simple_crypt($password);
        //账号或密码是否错误
        $this->db->where("account='$account' and account_pwd='$password'");
        $result = $this->db->getOne("ns_member", "account,member_status,balance,member_type");
        if (is_array($result)) {
            if ($result['member_status'] == 1) {
                $this->creat_vip_info($account);
                $this->db->where("account='$account'");
                $this->db->update("ns_member", array("login_time" => $arr['login_time']));
                $this->db->insert("ns_member_login", $arr);//id,account,login_time,login_ip,login_addr
                return $result;
            } else {
                return 1002;//会员帐号已锁定
            }
        } else {
            return 1001;//会员帐号密码不正确
        }
    }

    /**
     * 会员修改密码
     * @param $account string 会员帐号
     * @param $oldpwd string 会员旧密码
     * @param $newpwd string 会员新密码
     * @return 返回的是  error code
     */
    public function change_password($account, $oldpwd, $newpwd)
    {
        $new_password = $newpwd;
        $oldpwd = simple_crypt($oldpwd);
        $newpwd = simple_crypt($newpwd);
        $this->db->where("account_pwd='" . $oldpwd . "' and account='" . $account . "'");
        $result = $this->db->getOne("ns_member", "id");
        if (is_array($result)) {
            $this->db->where("account='" . $account . "'");
            $this->db->update("ns_member", array("account_pwd" => $newpwd));
            //$this->reset_game_password($account,$new_password);
            return 1;
        } else {
            return 1001; //密码不正确
        }
    }

    /**
     * 会员找回密码
     * @param $account string 会员帐号
     * @param $content string 会员邮箱 or 会员手机号码
     * @return 返回的是  error code
     */
    public function forget_account($account, $content, $arr = "")
    {
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        if (isset($arr['type']) && $arr['type'] == "phone") {
            $phone = $content;
            $this->db->where("member_account='$account' and phone='$phone'");
            $result = $this->db->getOne("ns_member_data", "member_id,member_account");
            if (is_array($result)) {
                $checkCode = mt_rand(100000, 999999);
                $redis->setex($account . "_pwdcheck", 1800, $checkCode);
                $message = "您验证码为：" . $checkCode . ",请及时验证。";
                $status = $this->send_sms($result['member_account'], $message, $phone);
                return 1;
            } else {
                return 1007;//会员信息不存在
            }
        } else {
            $email = $content;
            $this->db->where("member_account='$account' and email='$email'");
            $result = $this->db->getOne("ns_member_data", "member_id,member_account");
            if (is_array($result)) {
                $checkCode = mt_rand(100000, 999999);
                $redis->setex($account . "_pwdcheck", 1800, $checkCode);
                $this->send_forgetacc_email($result['member_account'], $email, $checkCode);
                return 1;
            } else {
                return 1007;//会员信息不存在
            }
        }
    }

    /**
     * 忘记密码的验证码确认
     * @param $account
     * @param $checkCode
     * @param string $arr
     * @return int
     */
    public function forget_account_check($account, $checkCode, $arr = "")
    {
        $account = strtolower(trim($account));
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        $status = $redis->get($account . "_pwdcheck");
        if ($status == "" || $checkCode == "") {
            return 1008;//验证码已过期
        }
        if ($status == $checkCode) {
            $redis->delete($account . "_pwdcheck");
            return 1;
        } else {
            return 1009;//验证码错误
        }
    }

    /**
     * 重置密码
     * @param $account
     * @param $password
     * @param $passwordCheck
     * @return int
     */
    public function reset_password($account, $password, $passwordCheck, $arr = "")
    {
        $account = strtolower(trim($account));
        $password = trim($password);
        $passwordCheck = trim($passwordCheck);
        if ($password == $passwordCheck) {
            $this->db->where("account='" . $account . "'");
            $result = $this->db->getOne("ns_member", "id");
            if (is_array($result)) {
                $this->db->where("account='" . $account . "'");
                $this->db->update("ns_member", array("account_pwd" => simple_crypt($password)));
                return 1;
            } else {
                return 1007;//帐号不存在
            }
        } else {
            return 1010;//密码不一致
        }
    }

    /**
     * 获取站内信未读信息的数量
     * @param $account string 会员帐号
     * @return array 站内信数,群发信数
     */
    function noread_message($account)
    {
        $this->db->where("account='$account' and group_status=0");
        $noread = $this->db->getOne("ns_message_group_status", "COUNT(id) as num");//该用户的已读系统消息
        $this->db->where("account='$account' and message_status=0");
        $result = $this->db->getOne("ns_message", "COUNT(id) as num");//该用户的未读站内消息
        return array($result['num'], $noread['num']);
    }

    /**
     * 获取记录的数据信息
     * @param $account string 会员帐号
     * @param $record_type string 记录的类型
     * @param $page string 第几页 默认第1页
     * @param $pages string 每页几条数据 默认10条
     * @return 返回的是  array
     */
    public function record_list($account, $record_type, $page, $pages)
    {
        $limit = array(0, $pages);
        $limit_other = "0," . $pages;
        if ($page > 1) {
            $pre_page = $pages * ($page - 1);
            $limit = array($pre_page, $pages);
            $limit_other = $pre_page . "," . $pages;
        }
        if ($record_type == "deposit") {
            //存款历史记录
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $result = $this->db->getOne("ns_deposit_history", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_deposit_history", $limit, "amount,bill_no,add_time");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "debit") {
            //取款申请 记录
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $result = $this->db->getOne("ns_debit", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_debit", $limit, "amount,bank_name,bank_no,debit_status,add_time,remark");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "withdraw") {
            //取款历史记录
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $result = $this->db->getOne("ns_debit_history", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_debit_history", $limit, "amount,bank_name,bank_no,add_time,finish_time");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "transfer") {
            //游戏转账记录
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $result = $this->db->getOne("ns_transfer", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_transfer", $limit, "amount,game_name,add_time");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "promotion") {
            //优惠活动记录
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $result = $this->db->getOne("ns_promotion", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_promotion", $limit, "promotion_name,promotion_money,promotion_status,add_time,remark");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "washcode") {
            //返水记录
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and washcode_status=1 and add_date>'" . $last_date . "'");
            $result = $this->db->getOne("ns_washcode_data", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and washcode_status=1 and add_date>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_washcode_data", $limit, "game_type,number,ratio,money,add_date");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "point") {
            //积分兑换记录
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $result = $this->db->getOne("ns_point", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_point", $limit, "point,point_ratio,amount,add_time");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "sign") {
            //签到记录
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and sign_time>'" . $last_date . "'");
            $result = $this->db->getOne("ns_member_sign", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and sign_time>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_member_sign", $limit, "account,sign_amount,sign_time");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "recommend") {
            $this->db->where("friend_account='" . $account . "'");
            $result = $this->db->getOne("ns_member_data", "count(*) as num");
            $arr['num'] = $result['num'];
            $this->db->where("friend_account='" . $account . "'");
            $this->db->orderBy("member_id", "DESC");
            $result = $this->db->get("ns_member_data", $limit, "member_account,reg_time");
            $recommend = array();
            foreach ($result as $v) {
                $apply_status = 4;//存款未达到500
                $reg_time = $v['reg_time'];
                $end_time = date("Y-m-d H:i:s", strtotime($reg_time . ' +7 day'));
                $account_value = $v['member_account'];
                $this->db->where("account='" . $account_value . "' and add_time between '" . $reg_time . "' and '" . $end_time . "'");
                $deposit = $this->db->getValue("ns_deposit_history", "SUM(amount)");
                if ($deposit >= 500) {
                    $apply_status = 3;//存款达到500，可领取
                }
                $this->db->where("account='" . $account . "' and recommend_account='" . $account_value . "'");
                $promotion = $this->db->getOne("ns_promotion", "promotion_status");
                if (is_array($promotion)) {
                    $apply_status = $promotion['promotion_status'];//判断是否领取过，0已申请未审核，1已申请审核通过，2已申请审核不通过
                }
                $recommend[] = array("account" => $account_value, "reg_time" => $reg_time, "total_deposit" => $deposit, "apply_status" => $apply_status);
            }
            $arr['record'] = $recommend;
            return $arr;
        } elseif ($record_type == "batch_promotion_receive") {
            $where = "account='" . $account . "' and promotion_status=1 and receive_status=0";
            $this->db->where($where);
            $result = $this->db->getOne("ns_batch_promotion_data", "count(*) as num");
            $arr['num'] = $result['num'];
            $this->db->where($where);
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_batch_promotion_data", $limit, "id,account,promotion_name,amount,add_time,expire_day");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "batch_promotion") {
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $where = "account='" . $account . "' and add_time>'" . $last_date . "'";
            $this->db->where($where);
            $result = $this->db->getOne("ns_batch_promotion_receive", "count(*) as num");
            $arr['num'] = $result['num'];
            $this->db->where($where);
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_batch_promotion_receive", $limit, "id,account,promotion_name,amount,add_time");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "washcode_receive") {
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $result = $this->db->getOne("ns_washcodeself_receive", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_washcodeself_receive", $limit, "account,amount,game_type,add_time");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "washcode_record") {
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and washcode_status=1 and add_date>'" . $last_date . "'");
            $result = $this->db->getOne("ns_washcodeself_data", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and washcode_status=1 and add_date>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_washcodeself_data", $limit, "game_type,number,ratio,money,add_date");
            $arr['record'] = $result;
            return $arr;
        } elseif ($record_type == "deposit_remind") {
            $arr = array();
            $last_date = date('Y-m-d', strtotime('-30 days'));
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $result = $this->db->getOne("ns_deposit_remind", "count(id) as num");
            $arr['num'] = $result['num'];
            $this->db->where("account='$account' and add_time>'" . $last_date . "'");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_deposit_remind", $limit, "amount,bill_no,deposit_name,deposit_time,remind_status,add_time,remark");
            $arr['record'] = $result;
            return $arr;
        }
    }

    /**
     * 获取帐号或游戏余额
     * @param $account string 会员帐号
     * @param $gameid int 0 或 游戏ID
     * @param $data array 预留参数
     * @return 返回的是  金额或code
     */
    public function get_balance($account, $gameid, $arr = "")
    {
        if ($gameid == 0) {
            $this->db->where("account='$account'");
            $result = $this->db->getOne("ns_member", "balance");
            return $result['balance'];
        } elseif ($gameid == 1) {
            $this->db->where("account='$account'");
            $result = $this->db->getOne("ns_member", "total_deposit,total_debit,sign_amount");
            return $result;
        } elseif ($gameid > 100) {
            $gameapi = $this->api_factory($gameid);
            //error_log("#".$account."#".$gameid."\r\n",3,"error_log.log");
            $result = $gameapi->query_balance($account);
            if ($result < 0 || preg_match("/^[0-9.]+$/", $result) == 0) {
                return -1;
            } else {
                return $result;
            }
        }
    }

    /**
     * 获取帐号或游戏余额
     * @param $account string 会员帐号
     * @param $data array 预留参数
     * @return array 返回的是  account,slot_vip,balance,noread,sign_amount
     */
    public function info_center($account, $arr = "")
    {
        $info = array();
        $sql = "SELECT a.account,a.balance,a.sign_amount,b.slot_vip,b.live_vip,a.credits,a.credits_use FROM ns_member AS a LEFT JOIN ns_member_vip AS b ON a.`account`=b.`account` WHERE a.account='" . $account . "'";
        $result = $this->db->rawQueryOne($sql);
        $info = $result;
        $info['info_slot_vip'] = switch_array_view(21, $info['slot_vip']);
        $info['info_live_vip'] = switch_array_view(24, $info['live_vip']);
        $this->db->where("account='$account' and message_status=0");
        $result = $this->db->getOne("ns_message", "COUNT(id) as num");//该用户的未读站内消息
        if ($result['num'] == null) {
            $info['noread'] = 0;
        } else {
            $info['noread'] = $result['num'];
        }
        $now_date = date("Y-m-d");
        $this->db->where("account='$account' and sign_time>'" . $now_date . "'");
        $result = $this->db->getOne("ns_member_sign", "COUNT(id) as num");//签到记录
        if ($result['num'] == null) {
            $info['sign'] = 0;
        } else {
            $info['sign'] = $result['num'];
        }
        return $info;
    }

    /**
     * 会员签到功能
     * @param $account string 会员帐号
     * @param $data array sign_amount,sign_ip,sign_time
     * @return array 返回的是  true or false;
     */
    public function member_sign($account, $arr = "")
    {
        $info = $arr;
        $info['account'] = $account;
        $sign_amount = $info['sign_amount'];
        //判断 是否符合签到 当天是否已签到
        $now_date = date("Y-m-d");
        $this->db->where("account='" . $account . "' and sign_time>'" . $now_date . "'");
        $result = $this->db->getOne("ns_member_sign", "id");
        if (is_array($result)) {
            return false;
        }
        //当天存款是否超过50元
        $this->db->where("account='" . $account . "' and add_time>'" . $now_date . "'");
        $total_amount = $this->db->getValue("ns_deposit_history", "sum(amount)");
        if ($total_amount < 50) {
            return false;
        }
        $this->db->where("account='" . $account . "'");
        $this->db->update("ns_member", array("sign_amount" => $this->db->inc($sign_amount)));
        $status = $this->db->insert("ns_member_sign", $info);
        if ($status > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 会员 获取 站内信的列表
     * @param $account string 会员帐号
     * @param $page int 第几页
     * @param $pages int 每页显示几条数据
     * @return array 站内信的个数，列表
     */
    public function get_message($account, $page, $pages)
    {
        $limit = array(0, $pages);
        if ($page > 1) {
            $pre_page = $pages * ($page - 1);
            $limit = array($pre_page, $pages);
        }
        $this->db->where("account='$account'");
        $result = $this->db->getOne("ns_message", "COUNT(id) AS num");
        $count = $result['num'];

        $this->db->where("account='$account'");
        $this->db->orderBy("id", "DESC");
        $result = $this->db->get("ns_message", $limit, "id,message_title,message_status,add_time");
        return array("count" => $count, "msgList" => $result);
    }

    /**
     * 会员 获取 站内信的内容
     * @param $id int 站内信ID
     * @return array 站内信的内容
     */
    public function get_message_content($id)
    {
        $this->db->where("id='$id'");
        $this->db->update("ns_message", array("message_status" => 1));
        $this->db->where("id='$id'");
        $result = $this->db->getOne("view_message", "id,message_title,add_time,message_content");
        return $result;
    }

    /**
     * 会员 获取 会员基本信息
     * @param $account string 会员帐号
     * @return array 会员信息
     */
    public function get_member_info($account)
    {
        $account = strtolower(trim($account));
        $info = array();
        $this->db->where("member_account='$account'");
        $result = $this->db->getOne("ns_member_data", "member_name,sex,email,qq,phone,birthday,wechat,receive_addr");
        $info = $result;
        $this->db->where("account='$account'");
        $this->db->orderBy("id", "DESC");
        $result = $this->db->get("ns_member_login", array(1, 1), "login_time,login_ip");
        if (is_array($result) && count($result) == 1) {
            $info = array_merge($info, $result[0]);
        }
        return $info;
    }

    /**
     * 会员 获取 取款银行 列表
     * @param $account string 会员帐号
     * @return array 取款银行列表
     */
    public function get_member_bank($account)
    {
        $this->db->where("account='$account'");
        $this->db->orderBy("id", "DESC");
        $result = $this->db->get("ns_member_bank", 3, "id,bank_name,bank_no,bank_addr,member_name,bank_province,bank_city");
        return $result;
    }

    /**
     * 会员  绑定取款银行信息
     * @param $account string 会员帐号
     * @param $password string 会员密码
     * @param $arr array 银行信息  bank_name bank_no bank_province bank_city bank_addr
     * @return status 错误代码
     */
    public function bind_bank_card($account, $password, $arr = "")
    {
        $this->db->where("account='$account'");
        $result = $this->db->getOne("ns_member_bank", "COUNT(id) as num");
        if ($result['num'] >= 3) {
            return 1005;//绑定银行卡数量超出
        }
        $password = simple_crypt($password);
        $this->db->where("account='$account' and account_pwd='" . $password . "'");
        $result = $this->db->getOne("view_member_detail", "member_name");
        if (is_array($result)) {
            $data = array("account" => $account, "member_name" => $result['member_name'], "bank_name" => $arr['bank_name'], "bank_no" => $arr['bank_no'], "bank_province" => $arr['bank_province'], "bank_city" => $arr['bank_city'], "bank_addr" => $arr['bank_addr']);
            $result = $this->db->insert("ns_member_bank", $data);
            if ($result > 0) {
                return 1;
            } else {
                return 2002;
            }
        } else {
            return 1001;//密码错误
        }
    }

    /**
     * 会员 解绑取款银行信息
     * @param $account string 会员帐号
     * @param $id int 列表ID
     * @param $arr array
     * @return status 错误代码
     */
    public function unbind_bank_card($account, $id, $arr)
    {
        $this->db->where("id=" . $id . " and account='$account'");
        $result = $this->db->getOne("ns_member_bank", "id");
        if (is_array($result)) {
            $this->db->where("id=" . $id);
            $this->db->delete("ns_member_bank");
            return 1;
        } else {
            return 1081;//帐号和ID不匹配
        }
    }

    /**
     * 会员  取款申请
     * @param $account string 会员帐号
     * @param $bankid int 会员取款银行ID
     * @param $amount decimal 取款金额
     * @param $arr array 其它数据 password
     * @return status 错误代码
     */
    public function member_debit($account, $bankid, $amount, $arr = array())
    {
        $password = simple_crypt($arr['password']);
        $this->db->where("account='$account' and account_pwd='" . $password . "'");
        $result = $this->db->getOne("ns_member", "id");
        if (is_array($result)) {
            $status = $this->p_member_debit($account, $bankid, $amount);
            return $status;
        } else {
            return 1001;//密码错误
        }
    }

    /**
     * 会员 自助取消 取款申请
     * @param $account string 会员帐号
     * @param $debit_id int 取款申请的ID
     * @return status 错误代码
     */
    public function member_cancel_debit($account, $debit_id)
    {
        $status = $this->p_member_cancel_debit($account, $debit_id);
        return $status;
    }

    /**
     * 会员 获取 游戏转账 列表
     * @param $id string 类型ID 01 或 02
     * @return array 游戏列表
     */
    public function get_transfer_list($id)
    {
        if ($id != "") {
            if ($id == "01") {
                $num = 1;
            } else {
                $num = 0;
            }
            $this->db->where("game_status=1 and game_id>10000 and MOD(game_id,2)=" . $num);
            $this->db->orderBy("game_id", "ASC");
            $result = $this->db->get("ns_game", null, "game_id,game_platform as game_name");
            return $result;
        }
    }

    /**
     * 会员 游戏转账
     * @param $account string 会员帐号
     * @param $game_id string 游戏ID
     * @param $amount int 要转账的金额
     * @param $arr array 其它数据 ip,address
     * @return status 错误代码
     */
    public function transfer($account, $game_id, $amount, $arr = "")
    {
        //1.查询游戏平台的余额和主账户余额
        $account = strtolower($account);
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        $status = $redis->get($account . "_transfer");
        if ($status == 1) {
            return 2001;
        }
        $redis->setex($account . "_transfer", 30, 1);

        $system_id = "t" . date("YmdHis") . mt_rand(1000, 9999);
        $transfer_type = substr($game_id, -1); //1为转入 2为转出
        $game_plat = substr($game_id, 0, 3);  //  判断 操作哪个游戏平台
        $balance = $this->get_balance($account, 0);  //获取主帐号余额
        $game_balance = $this->get_balance($account, $game_plat);    //获取游戏平台余额
        $game_class = $this->api_factory($game_plat);    //创建游戏平台实例
        if ($balance < 0 || $game_balance < 0) {
            return -1;//余额查询失败
        }
        $this->db->where("game_id=" . $game_id);
        $game_name = $this->db->getValue("ns_game", "game_name");   //查询游戏平台名称 for 金流
        if ($transfer_type == 1) {
            //主帐号 到 游戏平台
            $after_balance = $balance - $amount;
            $after_game_balance = $game_balance + $amount;
            if ($after_balance < 0 || $after_game_balance < 0) {
                return 1011; //余额不足
            }
            $status = $this->p_transfer_start($account, $amount, $game_id, $game_name, $balance, $game_balance, $after_balance, $after_game_balance, $system_id, $arr, $transfer_type);
            // error_log("a#".$account."#".$amount."#".$after_balance."#".$system_id."#".$game_name."#".$transfer_type."\r\n",3,"error_log.log");
            if ($status == 1) {
                $status = $game_class->deposit($account, $amount);   //游戏平台存款
                // error_log("bc#".$account."#".$amount."#".$after_balance."#".$system_id."#".$game_name."#".$transfer_type."##".$status."\r\n",3,"error_log.log");
                if ($status === true) {
                    // error_log("b#".$account."#".$amount."#".$after_balance."#".$system_id."#".$game_name."#".$transfer_type."\r\n",3,"error_log.log");
                    $status = $this->p_tansfer_end($account, $amount, $after_balance, $system_id, $game_name, $transfer_type);
                    if ($status == 1) {
                        return 1;//成功
                    } else {
                        return 2001;//存储过程处理失败
                    }
                } else {
                    return -1;//游戏平台处理失败
                }
            } else {
                return 2001; //存储过程处理失败
            }

        } elseif ($transfer_type == 2) {
            //游戏平台 到 主账户
            $after_balance = $balance + $amount;
            $after_game_balance = $game_balance - $amount;
            if ($after_balance < 0 || $after_game_balance < 0) {
                return 1011; //余额不足
            }
            $status = $this->p_transfer_start($account, $amount, $game_id, $game_name, $balance, $game_balance, $after_balance, $after_game_balance, $system_id, $arr, $transfer_type);
            if ($status == 1) {
                $status = $game_class->withdraw($account, $amount);   //游戏平台 取款
                if ($status === true) {
                    $status = $this->p_tansfer_end($account, $amount, $after_balance, $system_id, $game_name, $transfer_type);
                    if ($status == 1) {
                        return 1;//成功
                    } else {
                        return 2001;//存储过程处理失败
                    }
                } else {
                    return -1;//游戏平台处理失败
                }
            } else {
                return 2001; //存储过程处理失败
            }
        }
    }

    /**
     * 会员 签到金兑换
     * @param $account string 会员帐号
     * @param $amount int 要兑换的签到金
     * @param $arr array 其它数据 ip,address
     * @return status 错误代码
     */
    public function transfer_sign($account, $amount, $arr = "")
    {
        $this->db->where("account='" . $account . "'");
        $result = $this->db->getOne("ns_member", "balance,sign_amount");
        if (is_array($result) && ($result['sign_amount'] - $amount) >= 0) {
            $beforbalance = $result['balance'];
            $beforamount = $result['sign_amount'];
            $afterbalance = $result['balance'] + $amount;
            $afteramount = $result['sign_amount'] - $amount;
            $status = $this->p_transfer_sign($account, $amount, $beforbalance, $beforamount, $afterbalance, $afteramount, $arr);
            if ($status == 1) {
                return 1;
            } else {
                return 2001;
            }
        } else {
            return 1011;
        }
    }

    /**
     * 会员 积分兑换
     * @param $account string 会员帐号
     * @param $point int 要兑换的积分数
     * @return status 错误代码
     */
    public function point_exchange($account, $point, $arr = "")
    {
        //开始处理 1.查询积分 是否满足 2.更新积分和余额 3.插入数据 4.金流
        //1.查询 条件是否满足
        $now_date = date("Y-m-d H:i:s");
        $this->db->where("account='" . $account . "'");
        $result = $this->db->getOne("ns_member", "balance,credits,credits_use");
        if ($result['credits'] < 1000) {
            return 1031; //总积分 未达到规定标准
        }
        if ($point < 10 || $result['credits_use'] < $point) {
            return 1032;//积分数小于10 或者 可用积分不足
        }
        $point_ratio = 0.1; //固定比率 10积分换1元
        $amount = $point * $point_ratio;
        $balance = $result['balance'];
        //2.更新积分和余额
        $this->db->startTransaction();
        $this->db->where("account='" . $account . "'");
        $status = $this->db->update("ns_member", array("balance" => $this->db->inc($amount), "credits_use" => $this->db->inc($point)));
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //3.插入兑换数据
        $data = array(
            "account" => $account,
            "point" => $point,
            "point_ratio" => $point_ratio,
            "amount" => $amount,
            "add_time" => $now_date,
        );
        $status = $this->db->insert("ns_point", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //4.金流记录
        $data = array(
            "account" => $account,
            "flow_type" => 3,
            "flow_amount" => $amount,
            "flow_balance" => $balance + $amount,
            "flow_content" => "积分兑换 " . $amount,
            "flow_time" => $now_date
        );
        $status = $this->db->insert("ns_money_flow", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //所有操作 全部通过 事务提交
        $this->db->commit();
        return 1;
    }

    /**
     * 会员 救援金申请
     * @param $account string 会员帐号
     * @param $rescue_type int 救援金类型0今日 1昨日
     * @return status 错误代码
     */
    /**
     * 1.查询救援时间
     * 2.查询转账记录 是否符合
     * 3.查询是否有正在处理的提款申请
     * 4.查询总余额是否大于5
     * 5.查询救援金比例，根据slot_vip等级也区分
     * 6.计算负盈值 总存款-总取款-总余额-平台红利
     * 7.更新记录，更新金流等。
     */
    public function apply_rescue($account, $rescue_type = 0)
    {
        return 2004;
        //1.查询 救援 时间
        $now_date = date('Y-m-d H:i:s');
        if ($rescue_type == 1) {
            //昨日救援
            $yesterday = date('Y-m-d', strtotime('-1 day'));
            $last_time = $yesterday . ' 00:00:00';
            $now_time = $yesterday . ' 23:59:59';
            $this->db->where("account='$account' and add_time between '$last_time' and '$now_time'");
            $this->db->orderBy("id", "DESC");
            $info = $this->db->getOne("ns_rescue", "add_time");
            if (is_array($info)) {
                $last_time = $info['add_time'];
                if ($last_time == $now_time) {
                    return 1046;//昨日救援金已申请
                }
            }
        } else {
            //今日救援
            $last_time = date('Y-m-d') . ' 00:00:00';
            $now_time = date('Y-m-d H:i:s');
            $this->db->where("account='$account' and add_time between '$last_time' and '$now_time'");
            $this->db->orderBy("id", "DESC");
            $info = $this->db->getOne("ns_rescue", "add_time");
            if (is_array($info)) {
                $last_time = $info['add_time'];
            }
        }
        //2.查询是否有转账记录
        $this->db->where("account='$account' and add_time between '$last_time' and '$now_time' and (game_id<20000 OR game_id>30000)");
        $info = $this->db->getOne("ns_transfer", "id");
        if (is_array($info)) {
            return 1043;//玩过其它平台游戏
        }
        //3.查询取款申请
        $this->db->where("account='$account' and add_time between '$last_time' and '$now_time' and debit_status !=2");
        $info = $this->db->getOne("ns_debit", "id");
        if (is_array($info)) {
            return 1042;//当前有存在 取款申请
        }
        //4.查询主账户和平台余额
        $main_balance = $this->get_balance($account, 0);
        if ($main_balance > 5) {
            return 1044;//余额超过5
        }
        $pt_balance = $this->get_balance($account, 201);
        if (preg_match("/^[0-9.]+$/", $pt_balance) == 0) {
            $pt_balance = 0;
        }
        if ($pt_balance > 5) {
            return 1044;//PT超过5
        }
        $mg_balance = $this->get_balance($account, 202);
        if (preg_match("/^[0-9.]+$/", $mg_balance) == 0) {
            $mg_balance = 0;
        }
        if ($mg_balance > 5) {
            return 1044;//MG超过5
        }
        $balance = $main_balance + $pt_balance + $mg_balance;
        if ($balance > 5) {
            return 1044;//总余额超过5
        }
        //5.查询救援比例 根据VIP等级
        $this->db->where("account='" . $account . "'");
        $slot_vip = $this->db->getValue("ns_member_vip", "slot_vip");
        $rescue_ratio = $this->vip_to_rescue_ratio($slot_vip);
        //6.计算负赢值 和 救援金
        $this->db->where("account='$account' and add_time between '$last_time' and '$now_time'");
        $deposit = $this->db->getOne("ns_deposit_history", "sum(amount) as money");
        $this->db->where("account='$account' and add_time between '$last_time' and '$now_time'");
        $debit = $this->db->getOne("ns_debit_history", "sum(amount) as money");
        $this->db->where("account='$account' and promotion_status=1 and add_time between '$last_time' and '$now_time'");
        $promotion = $this->db->getOne("ns_promotion", "sum(promotion_money) as money");
        $deficit_money = $deposit['money'] - $debit['money'] - $promotion['money']; //负赢值
        if ($deficit_money < 100) {
            return 1045;//负赢值小于100
        }
        $rescue_money = $deficit_money * $rescue_ratio; //救援金
        //7.更新余额，插入救援记录，金流记录
        //事务处理 
        $this->db->startTransaction();
        $this->db->where("account='" . $account . "'");
        $status = $this->db->update("ns_member", array("balance" => $this->db->inc($rescue_money)));
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        $data = array(
            "account" => $account,
            "deposit_money" => $deposit['money'],
            "debit_money" => $debit['money'],
            "balance_money" => $balance,
            "rescue_money" => $rescue_money,
            "ratio" => $rescue_ratio,
            "balance_limit" => 5,
            "deficit_limit" => 100,
            "add_time" => $now_date,
        );
        $status = $this->db->insert("ns_rescue", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        $data = array(
            "account" => $account,
            "flow_type" => 3,
            "flow_amount" => $rescue_money,
            "flow_balance" => $main_balance + $rescue_money,
            "flow_content" => "救援金 " . $rescue_money,
            "flow_time" => $now_date
        );
        $status = $this->db->insert("ns_money_flow", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //所有操作 全部通过 事务提交
        $this->db->commit();
        return 1;
    }

    /**
     * 会员 获取优惠信息和内容
     * @param $type int 类型1为获取列表 2为获取详细内容
     * @param $id int 优惠的ID
     * @return array 信息或内容
     */
    public function get_promotion($type, $id = "")
    {
        $now_date = date("Y-m-d H:i:s");
        if ($type == 1) {
            $this->db->where("promotion_status=1 and show_status=1 and end_time>'" . $now_date . "'");
            $result = $this->db->get("ns_promotion_config", null, "id,promotion_name");
        } else {
            $this->db->where("id=" . $id . " and promotion_status=1 and end_time>'" . $now_date . "'");
            $result = $this->db->getOne("ns_promotion_config", "promotion_number,promotion_ratio");
        }
        return $result;
    }

    /**
     * 会员 申请相关优惠
     * @param $account string 游戏帐号
     * @param $id int 优惠的ID
     * @return status 错误代码
     */
    public function apply_promotion($account, $id)
    {
        $now_date = date("Y-m-d H:i:s");
        $this->db->where("promotion_id=" . $id . " and account='" . $account . "' and promotion_status=0");
        $info = $this->db->getOne("ns_promotion", "id");
        if (is_array($info)) {
            return 1062;//你申请的优惠正在审核 
        }
        if ($id == 7 || $id == 10) {
            $this->db->where("promotion_id=" . $id . " and account='" . $account . "'");
            $info = $this->db->getOne("ns_promotion", "id");
            if (is_array($info)) {
                return 1063;//只能申请一次优惠
            }
        }
        $this->db->where("id=" . $id . " and promotion_status=1 and end_time>'" . $now_date . "'");
        $info = $this->db->getOne("ns_promotion_config", "id,promotion_name,promotion_number");
        if (is_array($info)) {
            $data = array(
                "account" => $account,
                "promotion_id" => $info['id'],
                "promotion_name" => $info['promotion_name'],
                "promotion_number" => $info['promotion_number'],
                "add_time" => $now_date,
                "add_name" => $account,
            );
            $status = $this->db->insert("ns_promotion", $data);
            if ($status > 0) {
                return 1;
            } else {
                return 2002;
            }
        } else {
            return 1061;//优惠活动结束
        }
    }

    /**
     * 会员 登录游戏中心
     * @param $account string 游戏帐号
     * @param $game_id int  游戏ID
     * @param $arr array  ip   ip地址等
     * @return string 游戏链接或者ticket
     */
    public function game_login($account, $game_id, $arr = "")
    {
        $game = $this->api_factory($game_id);
        if ($game_id == 103) {
            $arr['betlimitid'] = $this->shenbo_betlimit($account);
        }
        $result = $game->login($account, $arr);
        return $result;
    }

    /**
     * 会员 获取 在线支付 支付类型
     * @param $account string 游戏帐号
     * @param $arr array  其它信息 pay_id
     * @return string 下拉列表 的内容 字符串
     */
    public function get_onlinepay_bank($account, $arr = "")
    {
        if (isset($arr['pay_id']) && $arr['pay_id'] != "") {
            $this->db->where("id=" . $arr['pay_id']);
        } else {
            if ($account == "kstest") {
                $this->db->where("id=46");
            } else {
                $this->db->where("deposit_type=0 and pay_channel=0 and bank_status=1");
            }
        }
        $result = $this->db->getOne("ns_bank", "pay_type");
        if (is_array($result)) {
            $pay_type = $result['pay_type'];
            $bank_data = include 'public/onlinepay.bank.php';
            $bank_list = $bank_data[$pay_type];
            return $bank_list;
        } else {
            return false;
        }
    }

    /**
     * 会员获取 可用的在线支付列表
     * @param $account string 游戏帐号
     * @param $arr array  其它信息member_type,pay_channel
     * @return string 下拉列表 的内容 字符串
     */
    public function get_onlinepay_list($account, $arr = "")
    {
        if (isset($arr['pay_channel']) && isset($arr['member_type'])) {
            $this->db->where("deposit_type=0 and pay_channel=" . $arr['pay_channel'] . " and bank_status=1 and member_type IN (100," . $arr['member_type'] . ")");
            $result = $this->db->get("ns_bank", null, "id,pay_name");
            return $result;
        } else {
            $this->db->where("deposit_type=0 and pay_channel=" . $arr['pay_channel'] . " and bank_status=1");
            $result = $this->db->get("ns_bank", null, "id,pay_name");
            return $result;
        }
    }

    /**
     * 会员 提交在线支付信息
     * @param $account string 游戏帐号
     * @param $amount int  存款金额
     * @param $bill_no string 系统订单号
     * @param $pay_channel int 支付通道
     * @param $arr array  其它信息 pay_id
     * @return string 支付表单字符串 或者 错误信息
     */
    public function onlinepay_submit($account, $amount, $bill_no, $bank_code, $pay_channel, $arr = "")
    {
        $now_date = date("Y-m-d H:i:s");
        if (isset($arr['pay_id']) && $arr['pay_id'] != "") {
            $this->db->where("id=" . $arr['pay_id']);
            if ($pay_channel == "wechat") {
                //微信支付 在线支付 1.获取可用的支付线，2.写入数据信息
                $bank_code = "wechat";
                $channel = 1;
            } elseif ($pay_channel == "alipay") {
                //支付宝支付 在线支付
                $bank_code = "alipay";
                $channel = 2;
            } elseif ($pay_channel == "tenpay") {
                //财付通支付 在线支付
                $bank_code = "tenpay";
                $channel = 3;
            } elseif ($pay_channel == "bank") {
                //网银支付 在线支付
                $channel = 0;
            }
        } else {
            return false;
        }

        $result = $this->db->getOne("ns_bank", "id,merchant_id,pay_name,deposit_type,pay_type,submit_url,return_url");
        $pay_type = $result['pay_type'];
        $submit_url = $result['submit_url'];
        $return_url = $result['return_url'];
        if (is_array($result)) {
            $data = array(
                "account" => $account,
                "amount" => $amount,
                "pay_channel" => $channel,
                "deposit_type" => $result['deposit_type'],
                "bank_id" => $result['id'],
                "bank_info" => $result['pay_name'],
                "bill_no" => $bill_no,
                "add_time" => $now_date,
                "deposit_status" => 0
            );
            $result = $this->db->insert("ns_deposit", $data);
            if ($result > 0) {
                $info = array(
                    "bill_no" => $bill_no,
                    "amount" => $amount,
                    "return_url" => $return_url,
                    "bank_code" => $bank_code,
                    "pay_channel" => $pay_channel
                );
                $onlinepay = $this->onlinepay_factory($pay_type);
                $pay_form = $onlinepay->build_data($info, $submit_url);
                return $pay_form;
            } else {
                return false;
            }
        } else {
            return 1071;//支付线路不可用
        }
    }

    /**
     * 会员 在线支付信息  商户通知 返回确认是否成功
     * @param $bill_no string 系统订单号
     * @param $return_no string 支付返回订单号
     * @param $amount float  存款金额
     * @param $amount_bak float  原始的存款金额
     * @return status 1或者错误代码
     */
    public function onlinepay_sure($bill_no, $return_no, $amount, $amount_bak = 0)
    {
        $this->db->where("bill_no='" . $bill_no . "' and amount=" . $amount_bak);
        $result = $this->db->getOne("ns_deposit", "id,account");
        if (is_array($result)) {
            $deposit_id = $result['id'];
            $account = $result['account'];
            if ($amount == $amount_bak) {
                //不扣手续费
                $this->db->where("id=" . $deposit_id);
                $this->db->update("ns_deposit", array("return_no" => $return_no));
                $status = $this->p_onlinepay_sure($account, $deposit_id, $amount);
                return $status;
            } elseif ($amount < $amount_bak) {
                //扣除手续费  有点卡或者 微信等支付
                $this->db->where("id=" . $deposit_id);
                $this->db->update("ns_deposit", array("amount" => $amount, "return_no" => $return_no));
                $status = $this->p_onlinepay_sure($account, $deposit_id, $amount);
                return $status;
            } else {
                //金额 错误 不提交信息
                return 2001;
            }
        } else {
            return 2001;
        }
    }

    /**
     * 会员 获取玩家密码
     * @param $account string 游戏帐号
     * @return string 密码
     */
    public function get_password($account)
    {
        $this->db->where("account='" . $account . "'");
        $account_pwd = $this->db->getValue("ns_member", "account_pwd");
        if ($account_pwd != "") {
            $password = simple_crypt($account_pwd, 2);
            return $password;
        } else {
            return false;
        }
    }

    /**
     * 会员 获取AG原始密码 用于下载版登录
     * @param $account string 游戏帐号
     * @return string 密码
     */
    public function get_ag_password($account)
    {
        $this->db->where("account='" . $account . "' and game_id=102");
        $password = $this->db->getValue("ns_game_pwd", "game_pwd");
        if ($password != "") {
            return $password;
        } else {
            return false;
        }
    }

    /**
     * 会员 获取存款银行信息
     * @param $account string 游戏帐号
     * @param $arr array 其它参数 member_type
     * @return array 存款银行信息
     */
    public function get_deposit_bank($account, $arr = "")
    {
        if (isset($arr['member_type']) && $arr['member_type'] >= 0) {
            $member_type = $arr['member_type'];
            $this->db->where("bank_status=1 and deposit_type>0 and member_type IN (100," . $member_type . ")");
            $result = $this->db->get("ns_bank", null, "id,bank_name,bank_account,bank_no,deposit_type,bank_type");
            return $result;
        } elseif (isset($arr['deposit_type']) && $arr['deposit_type'] == "remind") {
            $this->db->where("bank_status=1");
            $result = $this->db->get("ns_bank", null, "id,bank_name,bank_account,bank_no,pay_name");
            return $result;
        } else {
            $this->db->where("bank_status=1 and deposit_type>0");
            $result = $this->db->get("ns_bank", null, "id,bank_name,bank_account,bank_no,deposit_type,bank_type");
            return $result;
        }

    }

    /**
     * 会员 银行存款提交
     * @param $account string 游戏帐号
     * @param $amount float  存款金额
     * @param $bank_id int  存入银行的ID
     * @param $bill_no string 系统单号
     * @param $return_no string 银行流水号
     * @param $deposit_time datetime  存款的时间
     * @param $arr array 其它参数 deposit_name
     * @return status 1或者错误代码
     */
    public function deposit_bank($account, $amount, $bank_id, $bill_no, $return_no, $deposit_time, $arr = "")
    {
        $now_date = date("Y-m-d H:i:s");
        $this->db->where("id=" . $bank_id);
        $result = $this->db->getOne("ns_bank", "bank_name,bank_account,bank_no,deposit_type,fee_ratio");
        $bank_info = $result['bank_name'] . "-" . $result['bank_account'] . "-" . $result['bank_no'];
        $fee = $amount * $result['fee_ratio'];
        $data = array(
            "account" => $account,
            "amount" => $amount,
            "deposit_type" => $result['deposit_type'],
            "bank_id" => $bank_id,
            "fee" => $fee,
            "bill_no" => $bill_no,
            "return_no" => $return_no,
            "deposit_time" => $deposit_time,
            "bank_info" => $bank_info,
            "deposit_name" => $arr['deposit_name'],
            "deposit_addr" => $arr['deposit_addr'],
            "add_time" => $now_date
        );
        $insert_id = $this->db->insert("ns_deposit", $data);
        if ($insert_id > 0) {
            return 1;
        } else {
            return false;
        }
    }

    /**
     * 前台提交要回拨的电话号码
     * @param $phone string 电话号码
     * @param $account string 帐号
     * @return status 1或者错误代码
     */
    public function record_phone($phone, $account, $arr = "")
    {
        $now_date = date("Y-m-d H:i:s");
        $data = array(
            "phone" => $phone,
            "account" => $account,
            "add_time" => $now_date
        );
        $insert_id = $this->db->insert("ns_record_phone", $data);
        if ($insert_id > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * 游戏平台解锁
     * @param $account string 帐号
     * @param $game_id string 游戏平台ID
     * @return status 1或者错误代码
     */
    public function gameapi_unlock($account, $game_id, $arr = "")
    {
        $game = $this->api_factory($game_id);
        $result = $game->game_unlock($account, $arr);
        return $result;
    }

    /**
     * 游戏平台解锁
     * @param $account string 帐号
     * @param $game_id string 游戏平台ID
     * @return status 1或者错误代码
     */
    public function gameapi_active($account, $game_id, $arr = "")
    {
        $game = $this->api_factory($game_id);
        $result = $game->game_active($account, $arr);
        return $result;
    }

    /**
     * 游戏平台同步密码
     * @param $account string 帐号
     * @param $game_id string 游戏平台ID
     * @return status 1或者错误代码
     */
    public function gameapi_password($account, $game_id, $arr = "")
    {
        $game = $this->api_factory($game_id);
        $result = $game->change_password($account);
        return $result;
    }

    /**
     * 获取缓存信息
     * @param $cache_type string 缓存类型  web_ip
     * @return array 结果
     */
    public function get_cache($cache_type, $arr = "")
    {
        if ($cache_type == "web_ip") {
            $this->db->where("id=2");
            $result = $this->db->getOne("ns_whitelist", "ip_list");
            return $result;
        }
    }

    /**
     * 发送手机短信
     * @param $account string 游戏帐号
     * @param $content string 短信内容
     * @param $phone string 电话号码
     * @return status 结果
     */
    public function send_sms($account, $content, $phone = "", $arr = "")
    {
        if ($account != "" && $content != "") {
            if ($phone != "") {
                $url = "http://utf8.api.smschinese.cn/?Uid=ksw11&Key=befd07bb1607e78d96ee&smsMob=" . $phone . "&smsText=" . $content;
                $status = file_get_contents($url);
                error_log(date("Y-m-d H:i:s") . "#" . $account . "#" . $url . "#" . $status . "\r\n", 3, "log/sms_log.log");
                if ($status > 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                $this->db->where("member_account='" . $account . "'");
                $result = $this->db->getValue("ns_member_data", "phone");
                //$result = "18275028628";
                if ($result != "") {
                    $url = "http://utf8.api.smschinese.cn/?Uid=ksw11&Key=befd07bb1607e78d96ee&smsMob=" . $result . "&smsText=" . $content;
                    $status = file_get_contents($url);
                    error_log(date("Y-m-d H:i:s") . "#" . $account . "#" . $url . "#" . $status . "\r\n", 3, "log/sms_log.log");
                    if ($status > 0) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    /**
     * 积分抽奖活动
     * @param $account string 游戏帐号
     * @param $amount string 优惠金额，实物则为0
     * @param $prize_type int 中奖类型 0为未中奖，1为中奖
     * @param $prize_name string 奖品名称
     * @param $arr array
     * @return status 结果
     */
    public function point_prize($account, $amount, $prize_type, $prize_name, $arr = "")
    {
        //1.判断积分是否足够 2.扣除积分 3.记录中奖信息 4.写入奖金金流等
        $now_datetime = date("Y-m-d H:i:s");
        $this->db->where("account='" . $account . "'");
        $credits = $this->db->getValue("ns_member", "credits_use");
        if ($credits < 50) {
            return 1091;//积分不足
        }
        //2.扣除积分
        $this->db->startTransaction();
        $this->db->where("account='" . $account . "'");
        $status = $this->db->update("ns_member", array("credits_use" => $this->db->dec(50)));
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //3.记录中奖信息
        $prize_status = 0;
        if ($amount > 0 && $prize_type == 1) {
            //中了现金奖励 写入金流
            $prize_status = 1;
        }
        $data = array(
            "account" => $account,
            "amount" => $amount,
            "prize_name" => $prize_name,
            "prize_type" => $prize_type,
            "prize_status" => $prize_status,
            "add_time" => $now_datetime
        );
        $status = $this->db->insert("ns_point_prize", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //中了现金奖励 写入金流
        if ($amount > 0 && $prize_type == 1) {
            //4.更新余额信息 写入金流记录
            $this->db->where("account='" . $account . "'");
            $status = $this->db->update("ns_member", array("balance" => $this->db->inc($amount)));
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            $this->db->where("account='" . $account . "'");
            $balance = $this->db->getValue("ns_member", "balance");
            $data = array(
                "account" => $account,
                "flow_type" => 3,
                "flow_amount" => $amount,
                "flow_balance" => $balance,
                "flow_content" => "积分抽奖" . $amount,
                "flow_time" => $now_datetime
            );
            $status = $this->db->insert("ns_money_flow", $data);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
        }
        //所有操作 全部通过 事务提交
        $this->db->commit();
        return 1;
    }

    /**
     * 订阅邮件的功能 记录订阅的email地址
     * @param string $email 邮件地址
     * @param int $type 参数类型 默认为0 查询email， 为1则插入数据
     * @param array $arr 备用参数 默认为空
     * @return int or false
     */
    public function subscribe_email($email, $type = 0, $arr = "")
    {
        if ($type == 0) {
            $this->db->where("email='" . $email . "'");
            $result = $this->db->getOne("ns_subscribe_email", "id");
            if (is_array($result)) {
                return true;
            } else {
                return false;
            }
        } elseif ($type == 1) {
            $insertData = array(
                "email" => $email,
                "add_time" => date("Y-m-d H:i:s")
            );
            $status = $this->db->insert("ns_subscribe_email", $insertData);
            return $status;
        }
    }

    /**
     * 申请好友推荐礼金，查询是否满足 个人总存款超过500元 和 5个好友
     * @param string $account
     * @return array code,num
     */
    public function get_recommend_info($account)
    {
        $account = trim(strtolower($account));
        $this->db->where("account='" . $account . "'");
        $result = $this->db->getOne("ns_member", "id,total_deposit");
        $friendCode = "";
        if (is_array($result) && $result['total_deposit'] >= 500) {
            $friendCode = createFriendId($result['id']);
        }
        $num = 0;
        $promotion_id = 43;
        $this->db->where("account='" . $account . "' and promotion_id=" . $promotion_id . " and promotion_status=1");
        $num = $this->db->getValue("ns_promotion", "COUNT(id)");
        return array("code" => $friendCode, "num" => $num);
    }

    /**
     * 申请好友推荐礼金优惠
     * @param string $account
     * @param string $account_value
     * @param string $arr
     * @return boolean
     */
    public function apply_recommend_promotion($account, $account_value, $arr = "")
    {
        //1.根据promotion_id创建一个优惠申请 ,条件：查询account_value是否从注册时间到第七天 有存款达到500元
        $account = trim(strtolower($account));
        $account_value = trim(strtolower($account_value));
        $this->db->where("member_account='" . $account_value . "' and friend_account='" . $account . "'");
        $reg_time = $this->db->getValue("ns_member_data", "reg_time");
        if ($reg_time == "") {
            return false;
        }
        $end_time = date("Y-m-d H:i:s", strtotime($reg_time . ' +7 day'));
        $this->db->where("account='" . $account_value . "' and add_time between '" . $reg_time . "' and '" . $end_time . "'");
        $deposit = $this->db->getValue("ns_deposit_history", "SUM(amount)");
        if ($deposit >= 500) {
            $promotion_id = 43;
            $promotion_name = "好友推荐礼金" . $account_value;
            $promotion_money = 118;
            $promotion_number = 15;
            $add_name = "auto";
            $add_time = date("Y-m-d H:i:s");
            $insertData = array(
                "promotion_id" => $promotion_id,
                "account" => $account,
                "promotion_name" => $promotion_name,
                "promotion_money" => $promotion_money,
                "promotion_number" => $promotion_number,
                "add_name" => $add_name,
                "add_time" => $add_time,
                "recommend_account" => $account_value,
            );
            $status = $this->db->insert("ns_promotion", $insertData);
            if ($status === false) {
                return false;
            } else {
                return true;
            }
        } else {
            return 1064;//一周内存款金额不足
        }
    }

    /**
     * 申请好友推荐礼金118 满足5个推荐好友
     * @param string $account
     * @param string $arr
     * @return status
     */
    public function apply_recommend_amount($account, $arr = "")
    {
        //1.查询有多少个推荐好友，2.查询是否已领取了118，3.写入优惠数据，4.更新余额，5.写入金流
        $promotion_id = 43;
        $account = trim(strtolower($account));
        //1.查询有多少个推荐好友
        $this->db->where("account='" . $account . "' and promotion_id=" . $promotion_id . " and promotion_status=1");
        $result = $this->db->getValue("ns_promotion", "COUNT(id)");
        if ($result >= 5) {
            //2.查询是否已领取了118
            $this->db->where("account='" . $account . "'");
            $temp = $this->db->getValue("ns_friend_recommend", "COUNT(id)");
            if ($temp >= 1) {
                return 1067;
            }
            //开始处理 1.写入优惠数据  2.更新余额 3.金流
            $now_date = date("Y-m-d H:i:s");
            $amount = 118;
            $this->db->startTransaction();
            $insertData = array(
                "account" => $account,
                "amount" => $amount,
                "add_time" => $now_date,
            );
            $status = $this->db->insert("ns_friend_recommend", $insertData);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //2.更新余额
            $this->db->where("account='" . $account . "'");
            $status = $this->db->update("ns_member", array("balance" => $this->db->inc($amount)));
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //4.金流记录
            $this->db->where("account='" . $account . "'");
            $balance = $this->db->getValue("ns_member", "balance");
            $data = array(
                "account" => $account,
                "flow_type" => 3,
                "flow_amount" => $amount,
                "flow_balance" => $balance + $amount,
                "flow_content" => "优惠推荐满5人+" . $amount,
                "flow_time" => $now_date
            );
            $status = $this->db->insert("ns_money_flow", $data);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //所有操作 全部通过 事务提交
            $this->db->commit();
            return 1;
        } else {
            return 1065;//推荐人数不足
        }
    }

    /**
     * 领取批量优惠金额
     * @param string $account
     * @param int $id
     * @param array $arr
     * @return status
     */
    public function apply_batch_promotion($account, $id, $arr = "")
    {
        if (is_numeric($id) === true) {
            $where = "id=" . $id . " and  account='" . $account . "' and promotion_status=1 and receive_status=0";
            $this->db->where($where);
            $result = $this->db->getOne("ns_batch_promotion_data", "promotion_id,promotion_name,amount");
            if (is_array($result)) {
                //开始处理 1.写入领取数据  2.更新余额 3.金流
                $now_date = date("Y-m-d H:i:s");
                $amount = $result['amount'];
                $this->db->startTransaction();
                //1.变更领取状态
                $this->db->where("id=" . $id);
                $status = $this->db->update("ns_batch_promotion_data", array("receive_status" => 1));
                if ($this->db->count == 0) {
                    $this->db->rollback();
                    return 2001;
                }
                //2.写入领取数据
                $insertData = array(
                    "promotion_id" => $result['promotion_id'],
                    "promotion_name" => $result['promotion_name'],
                    "account" => $account,
                    "amount" => $amount,
                    "add_time" => $now_date,
                );
                $status = $this->db->insert("ns_batch_promotion_receive", $insertData);
                if ($status === false) {
                    $this->db->rollback();
                    return 2001;
                }
                //2.更新余额
                $this->db->where("account='" . $account . "'");
                $status = $this->db->update("ns_member", array("balance" => $this->db->inc($amount)));
                if ($status === false) {
                    $this->db->rollback();
                    return 2001;
                }
                //4.金流记录
                $this->db->where("account='" . $account . "'");
                $balance = $this->db->getValue("ns_member", "balance");
                $data = array(
                    "account" => $account,
                    "flow_type" => 3,
                    "flow_amount" => $amount,
                    "flow_balance" => $balance,
                    "flow_content" => "批量优惠领取+" . $amount,
                    "flow_time" => $now_date
                );
                $status = $this->db->insert("ns_money_flow", $data);
                if ($status === false) {
                    $this->db->rollback();
                    return 2001;
                }
                //所有操作 全部通过 事务提交
                $this->db->commit();
                return 1;
            } else {
                return false;
            }
        }
    }

    /**
     * 返水金额池
     * @param $account
     * @param string $arr
     * @return array
     */
    public function washcode_pool($account, $arr = "")
    {
        $account = strtolower(trim($account));
        $this->db->where("account='" . $account . "'");
        $data = $this->db->getOne("ns_washcodeself_pool", "*");
        return $data;
    }

    /**
     * 领取返水金额
     * @param $account
     * @param $gameId
     * @param string $arr
     * @return bool
     */
    public function receive_washcode($account, $gameId, $arr = "")
    {
        //1.查玩家的返水金是否足够 2.更新返水池中的金额，3.更新到中心钱包，4.写入到领取列表，5.写入金流记录
        $account = strtolower(trim($account));
        $gid = "gid" . $gameId;
        $nowTime = date("Y-m-d H:i:s");
        //1.查玩家的返水金是否足够
        $this->db->where("account='" . $account . "'");
        $amount = $this->db->getValue("ns_washcodeself_pool", $gid);
        $credits = floor($amount / 10);//K币积分
        if ($amount > 0) {
            $this->db->startTransaction();
            //2.更新返水池中的金额
            $this->db->where("account='" . $account . "'");
            $status = $this->db->update("ns_washcodeself_pool", array($gid => 0));
            if ($this->db->count == 0) {
                $this->db->rollback();
                return 2001;
            }
            //3.更新到中心钱包
            $this->db->where("account='" . $account . "'");
            //K币积分
            $data = array(
                "balance" => $this->db->inc($amount),
                "credits" => $this->db->inc($credits),
                "credits_use" => $this->db->inc($credits),
            );
            $status = $this->db->update("ns_member", $data);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //4.写入到领取列表
            $data = array(
                "account" => $account,
                "amount" => $amount,
                "game_type" => $gameId,
                "add_time" => $nowTime,
            );
            $status = $this->db->insert("ns_washcodeself_receive", $data);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //5.金流记录
            $this->db->where("account='" . $account . "'");
            $balance = $this->db->getValue("ns_member", "balance");
            $data = array(
                "account" => $account,
                "flow_type" => 3,
                "flow_amount" => $amount,
                "flow_balance" => $balance,
                "flow_content" => $gameId . "返水领取" . $amount,
                "flow_time" => $nowTime
            );
            $status = $this->db->insert("ns_money_flow", $data);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //所有操作 全部通过 事务提交
            $this->db->commit();
            return 1;
        } else {
            return 1066;//返水金额为0或不足 无法领取
        }
        return true;
    }

    /**
     * 把会员日报表的数据写入数据库
     * @param $data
     * @param string $type member普通会员报表  agent代理报表
     * @param string $arr
     * @return mixed
     */
    public function insert_daily_report($data, $type = "member", $arr = "")
    {
        if ($type == "member") {
            $insert_id = $this->db->insert("ns_daily_report", $data);
            return $insert_id;
        } elseif ($type == "agent") {
            $insert_id = $this->db->insert("ns_daily_agent_report", $data);
            return $insert_id;
        } else {
            return false;
        }
    }

    /**
     * 获取自动到账存款列表信息
     * @return mixed
     */
    public function get_auto_deposit()
    {
        $searchTime = date("Y-m-d H:i:s", time() - 3600);
        $this->db->where("add_time>'" . $searchTime . "' and deposit_type=5");
        $this->db->orderBy("id", "asc");
        $result = $this->db->get("ns_deposit", 100, "id,account,amount,deposit_name,deposit_bank,deposit_time");
        return $result;
    }

    public function update_auto_deposit($id, $account)
    {
        $account = strtolower(trim($account));
        $this->db->where("id=" . $id . " and account='" . $account . "'");
        $result = $this->db->getOne("ns_deposit", "id");
        if (is_array($result) && $id == $result['id']) {
            $status = $this->p_deposit_success($id, "kuaihuibao");
            return $status;
        } else {
            return false;
        }
    }

    /**
     * 获取网银自动到账的银行列表
     * @return mixed
     */
    public function get_auto_bank_list()
    {
        $this->db->where("deposit_type=5 and bank_status=0");
        $result = $this->db->get("ns_bank", null, "id,bank_name,bank_account,bank_no,deposit_type,bank_type");
        return $result;
    }

    /**
     * 提交自动存款信息 用于自动到账软件
     * @param $account
     * @param $amount
     * @param $bank_id
     * @param $bill_no
     * @param $deposit_name
     * @param $deposit_bank
     * @param $deposit_time
     * @param string $arr
     * @return bool|int
     */
    public function deposit_auto_bank($account, $amount, $bank_id, $bill_no, $deposit_name, $deposit_bank, $deposit_time, $arr = "")
    {
        $now_date = date("Y-m-d H:i:s");
        $this->db->where("id=" . $bank_id);
        $result = $this->db->getOne("ns_bank", "bank_name,bank_account,bank_no,deposit_type,fee_ratio");
        $bank_info = $result['bank_name'] . "-" . $result['bank_account'] . "-" . $result['bank_no'];
        $fee = $amount * $result['fee_ratio'];
        $data = array(
            "account" => $account,
            "amount" => $amount,
            "deposit_type" => $result['deposit_type'],
            "bank_id" => $bank_id,
            "fee" => $fee,
            "bill_no" => $bill_no,
            "deposit_time" => $deposit_time,
            "bank_info" => $bank_info,
            "deposit_name" => $deposit_name,
            "deposit_bank" => $deposit_bank,
            "add_time" => $now_date
        );
        $insert_id = $this->db->insert("ns_deposit", $data);
        if ($insert_id > 0) {
            return 1;
        } else {
            return false;
        }
    }

    /**
     * 会员完善信息
     * @param $account
     * @param $field
     * @param $content
     * @param string $arr
     * @return bool
     */
    public function member_bind_information($account, $field, $content, $arr = "")
    {
        $account = strtolower(trim($account));
        if (check_special_char($content)) {
            return 1013;//存在特殊字符
        }
        $fields = array("member_name", "birthday", "sex", "qq", "email", "wechat", "receive_addr");
        if (in_array($field, $fields)) {
            $data = array($field => $content);
            if ($field == "sex" || $field == "receive_addr") {
                $this->db->where("member_account='" . $account . "'");
                $this->db->update("ns_member_data", $data);
                return 1;
            } else {
                $this->db->where("member_account='" . $account . "'");
                $result = $this->db->getValue("ns_member_data", $field);
                if ($result == "" || $result == "0000-00-00") {
                    $this->db->where("member_account='" . $account . "'");
                    $this->db->update("ns_member_data", $data);
                    return 1;
                } else {
                    return 1006;//会员信息已存在
                }
            }
        } else {
            return 1014;//字段信息不正确
        }
    }

    /**
     * 会员设置取款密码或修改取款密码
     * @param $account
     * @param $password
     * @param $newPassword
     * @param string $arr
     * @return int
     */
    public function member_debit_password($account, $password, $newPassword, $arr = "")
    {
        $account = strtolower(trim($account));
        $this->db->where("account='" . $account . "'");
        $pwd = $this->db->getValue("ns_member", "debit_pwd");
        if ($pwd == "") {
            $newPassword = simple_crypt($newPassword);
            $this->db->where("account='" . $account . "'");
            $this->db->update("ns_member", array("debit_pwd" => $newPassword));
            return 1;
        } else {
            if ($password == simple_crypt($pwd, 2)) {
                $newPassword = simple_crypt($newPassword);
                $this->db->where("account='" . $account . "'");
                $this->db->update("ns_member", array("debit_pwd" => $newPassword));
                return 1;
            } else {
                return 1001;//密码错误
            }
        }
    }

    /**
     * 验证玩家的取款密码相关
     * @param $account
     * @param string $type check,unlock
     * @param string $arr password
     * @return int errorCode
     */
    public function check_debit_password($account, $type = "", $arr = "")
    {
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        if ($type == "check") {
            $num = $redis->get($account . "_dpwdcheck");
            $num = $num ? $num : 0;
            if ($num >= 3) {
                return 1016;//1016取款密码锁定
            }
            $password = simple_crypt($arr['password']);
            $this->db->where("account='" . $account . "'");
            $pwd = $this->db->getValue("ns_member", "debit_pwd");
            if ($pwd == $password) {
                $redis->delete($account . "_dpwdcheck");
                return 1;
            } else {
                $redis->setex($account . "_dpwdcheck", 86400, $num + 1);
                return 1001;//密码错误
            }
        } elseif ($type == "unlock") {
            $redis->delete($account . "_dpwdcheck");
            return 1;
        } else {
            $this->db->where("account='" . $account . "'");
            $pwd = $this->db->getValue("ns_member", "debit_pwd");
            if ($pwd == "") {
                return 1015;//取款密码不存在
            } else {
                return 1;
            }
        }
    }

    /**
     * 验证邮箱地址
     * @param $account
     * @param $email
     * @param $code
     * @param string $arr
     * @return bool|int
     */
    public function verify_email($account, $email, $code, $arr = "")
    {
        include_once("public/PHPMailer.class.php");
        include_once("public/smtp.class.php");
        $config = include("public/emailCheck.config.php");
        $content = $config['Body'];
        $content = str_replace("@account@", $account, $content);
        $content = str_replace("@password@", $code, $content);
        $mail = new PHPMailer();
        $mail->IsSMTP(); // 使用SMTP方式发送
        $mail->CharSet = 'UTF-8';// 设置邮件的字符编码
        $mail->Host = $config["Host"]; // 您的企业邮局域名
        $mail->SMTPAuth = true; // 启用SMTP验证功能
        $mail->Port = $config["Port"]; //SMTP端口
        $mail->SMTPSecure = 'ssl';  // 启用加密传输
        $mail->Username = $config["Username"]; // 邮局用户名(请填写完整的email地址)
        $mail->Password = $config["Password"]; // 邮局密码
        $mail->From = $config["From"]; //邮件发送者email地址
        $mail->FromName = $config["FromName"];
        $mail->AddAddress($email, "");
        $mail->Subject = $config['Subject']; //邮件标题
        $mail->Body = $content; //邮件内容
        $mail->isHTML(true);
        $status = $mail->Send();
        if ($status === false) {
            return false;
        } else {
            return 1;
        }
    }

    /**
     * 存款催帐功能
     * @param $account
     * @param $amount
     * @param $bank_id
     * @param $image_name
     * @param array $data bill_no,deposit_name,deposit_time,remark
     * @return int
     */
    public function deposit_remind($account, $amount, $bank_id, $image_name, $data = [])
    {
        $account = strtolower(trim($account));
        if (is_numeric($bank_id)) {
            $this->db->where("id=" . $bank_id);
            $bank = $this->db->getOne("ns_bank", "bank_name,bank_account,bank_no,pay_name");
            if ($bank['bank_name'] == "") {
                $bank_info = $bank['pay_name'];
            } else {
                $bank_info = $bank['bank_name'] . "-" . $bank['bank_account'] . "-" . substr($bank['bank_no'], -4);
            }
            $insertData = array(
                "account" => $account,
                "amount" => $amount,
                "bank_id" => $bank_id,
                "bank_info" => $bank_info,
                "image_url" => $image_name,
                "bill_no" => $data['bill_no'],
                "deposit_name" => $data['deposit_name'],
                "deposit_time" => $data['deposit_time'],
                "remark" => $data['remark'],
                "add_time" => date("Y-m-d H:i:s"),
            );
            $status = $this->db->insert("ns_deposit_remind", $insertData);
            if ($status === false) {
                return 2001;//数据无法保存
            } else {
                return 1;
            }
        } else {
            return 1013;//信息错误
        }
    }

    /**
     * 获取VIP升级条件
     * @param $account
     * @param string $arr
     * @return mixed  array deposit  total_deposit  credits
     */
    public function get_vip_condition($account, $arr = "")
    {
        //1.通过帐号查询对应的VIP等级，获取对应的晋级条件
        //1.查询当月单笔存款，2.当月累计存款，3.当月获取K币
        $account = strtolower(trim($account));
        $searchDate = get_month();
        $startDate = $searchDate[0];
        $endDate = $searchDate[1];
        $this->db->where("account='" . $account . "' and add_time between '" . $startDate . "' and '" . $endDate . " 23:59:59'");
        $totalWashcode = $this->db->getValue("ns_washcodeself_receive", "SUM(amount)");
        $credits = $totalWashcode / 10;
        $this->db->where("account='" . $account . "' and add_time between '" . $startDate . "' and '" . $endDate . " 23:59:59'");
        $deposit = $this->db->getOne("ns_deposit_history", "MAX(amount) as deposit,SUM(amount) as total_deposit");
        $deposit['credits'] = $credits;
        return $deposit;
    }

    /**
     * VIP自助升级
     * @param $account
     * @param string $arr
     * @return int
     */
    public function upgrade_vip($account, $arr = "")
    {
        $account = strtolower(trim($account));
        $this->db->where("account='" . $account . "'");
        $result = $this->db->getOne("ns_member_vip", "member_vip,vip_max");
        $vipLevel = $result['member_vip'];
        $vipMax = $result['vip_max'];
        $condition = vip_condition($vipLevel);
        if ($condition === false) {
            return 1017;//等级已超出限制
        }
        $result = $this->get_vip_condition($account);
        if ($result['credits'] < $condition['credits']) {
            return 1018;//当月获取的k币数不足
        }

        if ($result['deposit'] > $condition['deposit'] || $result['total_deposit'] > $condition['total_deposit']) {
            if ($vipLevel == $vipMax) {
                $insertData = array(
                    "account" => $account,
                    "vip_level" => $vipLevel + 1,
                    "amount" => $condition['vip_gift'],
                    "add_time" => date("Y-m-d H:i:s"),
                );
                $this->db->where("account='" . $account . "'");
                $this->db->update("ns_member_vip", array("member_vip" => $this->db->inc(1), "vip_max" => $this->db->inc(1)));
                $this->db->insert("ns_member_vip_record", $insertData);
            } else {
                $insertData = array(
                    "account" => $account,
                    "vip_level" => $vipLevel + 1,
                    "amount" => 0,
                    "receive_status" => 1,
                    "add_time" => date("Y-m-d H:i:s"),
                );
                $this->db->where("account='" . $account . "'");
                $this->db->update("ns_member_vip", array("member_vip" => $this->db->inc(1)));
                $this->db->insert("ns_member_vip_record", $insertData);
            }
            return 1;//条件满足
        } else {
            return 1019;//当月存款和当月总存款都不满足
        }
    }

    /**
     * 查询是否有可领取的晋级筹码和每月免费筹码
     * @param $account
     * @param string $type
     * @return mixed
     */
    public function query_vip_gift($account, $type = "gift")
    {
        //查询是否有可领取的晋级筹码和每月免费筹码
        $account = strtolower(trim($account));
        if ($type == "gift") {
            //查询晋级礼金记录
            $this->db->where("account='" . $account . "' and gift_type=0");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_member_vip_record", null, "account,vip_level,amount,receive_status,add_time,finish_time");
        } elseif ($type == "month_free") {
            //查询每月免费筹码
            $this->db->where("account='" . $account . "' and gift_type=1");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_member_vip_record", null, "account,vip_level,amount,add_time");
        } elseif ($type == "receive_gift") {
            //查询是否可领取晋级礼金
            $this->db->where("account='" . $account . "' and gift_type=0 and receive_status=0 and amount>0");
            $this->db->orderBy("id", "DESC");
            $result = $this->db->get("ns_member_vip_record", null, "id,vip_level,amount,add_time");
        }
        return $result;
    }

    /**
     * 领取晋级筹码和每月免费筹码
     * @param $account
     * @param string $type 参数有gift和month_free
     * @param string $data 1.当type的参数为gift时，要传一个id（query_vip_gift 方法中获取）。 2.month_free  3.deposit
     * @return int        返回的是状态码
     */
    public function get_vip_gift($account, $type = "gift", $data = "")
    {
        //领取晋级筹码和每月免费筹码  gift_type 固定值0为晋级筹码1为每月筹码2为存即送
        $account = strtolower(trim($account));
        $nowTime = date("Y-m-d H:i:s");
        //领取晋级筹码
        if ($type == "gift") {
            if (isset($data['id']) && $data['id'] != "" && is_numeric($data['id'])) {
                $id = $data['id'];
                $this->db->where("id=" . $id . " and receive_status=0 and amount>0");
                $result = $this->db->getOne("ns_member_vip_record", "vip_level,amount");
                //领取晋级礼金事务  1.更新记录状态，2.更新余额，3.插入金流
                $this->db->startTransaction();
                //1.更新记录状态
                $this->db->where("id=" . $id . "");
                $status = $this->db->update("ns_member_vip_record", array("receive_status" => 1, "finish_time" => $nowTime));
                if ($status === false) {
                    $this->db->rollback();
                    return 2001;
                }
                //2.更新余额
                $this->db->where("account='" . $account . "'");
                $status = $this->db->update("ns_member", array("balance" => $this->db->inc($result['amount'])));
                if ($status === false) {
                    $this->db->rollback();
                    return 2001;
                }
                //3.插入金流
                $this->db->where("account='" . $account . "'");
                $balance = $this->db->getValue("ns_member", "balance");
                $flowData = array(
                    "account" => $account,
                    "flow_type" => 3,
                    "flow_amount" => $result['amount'],
                    "flow_balance" => $balance,
                    "flow_content" => "晋级礼金 +" . $result['amount'],
                    "flow_time" => $nowTime
                );
                $status = $this->db->insert("ns_money_flow", $flowData);
                if ($status === false) {
                    $this->db->rollback();
                    return 2001;
                }
                //所有操作 全部通过 事务提交
                $this->db->commit();
                return 1;
            } else {
                return 1022;//条件不满足
            }
        } elseif ($type == "month_free") {
            //领取每月免费筹码
            $freeList = array(0, 38, 88, 188, 588, 888);
            $this->db->where("account='" . $account . "'");
            $vip = $this->db->getValue("ns_member_vip", "member_vip");
            if ($vip >= 0 && $vip <= 5) {
                $free = $freeList[$vip];
            } else {
                $free = 0;
            }
            if ($free > 0) {
                //领取每月免费筹码 事务处理 1.更新余额，2.写入记录，3.写入金流
                $this->db->startTransaction();
                $this->db->where("account='" . $account . "'");
                $status = $this->db->update("ns_member", array("balance" => $this->db->inc($free)));
                if ($status === false) {
                    $this->db->rollback();
                    return 2001;
                }
                $insertData = array(
                    "account" => $account,
                    "amount" => $free,
                    "gift_type" => 1,
                    "vip_level" => $vip,
                    "receive_status" => 1,
                    "add_time" => $nowTime,
                    "finish_time" => $nowTime,
                );
                $status = $this->db->insert("ns_member_vip_record", $insertData);
                if ($status === false) {
                    $this->db->rollback();
                    return 2001;
                }
                //3.插入金流
                $this->db->where("account='" . $account . "'");
                $balance = $this->db->getValue("ns_member", "balance");
                $flowData = array(
                    "account" => $account,
                    "flow_type" => 3,
                    "flow_amount" => $free,
                    "flow_balance" => $balance,
                    "flow_content" => "VIP每月 +" . $free,
                    "flow_time" => $nowTime
                );
                $status = $this->db->insert("ns_money_flow", $flowData);
                if ($status === false) {
                    $this->db->rollback();
                    return 2001;
                }
                //所有操作 全部通过 事务提交
                $this->db->commit();
                return 1;
            } else {
                return 1023;//免费筹码为0
            }
        } elseif ($type == "deposit") {
            //领取昨天的存款总手续费
            $amountLimit = array(0, 0, 388, 588, 688, 888);
            $amountRatio = array(0, 0, 1, 1.5, 2, 3);
            $this->db->where("account='".$account."' and add_time>'".date("Y-m-d")."'");
            $result = $this->db->getValue("ns_member_vip_record","id");
            if($result > 0){
                return 1024;//已领取过
            }
            $this->db->where("account='".$account."'");
            $vipLevel = $this->db->getValue("ns_member_vip","member_vip");
            if($vipLevel <0 || $vipLevel>5){
                return 1017;//超出等级范围
            }
            if($amountLimit[$vipLevel] == 0){
                return 1023;//没有可领取的筹码
            }
            $lastDate = date("Y-m-d",strtotime("-1 day"));
            $this->db->where("account='".$account."' and add_time between '".$lastDate."' and '".$lastDate." 23:59:59'");
            $totalDeposit = $this->db->getValue("ns_deposit_history","SUM(amount)");
            $fee = $totalDeposit * $amountRatio[$vipLevel] /100;
            if($fee >= $amountLimit[$vipLevel]){
                $fee = $amountLimit[$vipLevel];
            }
            //领取昨天存款即送金额 事务处理
            $this->db->startTransaction();
            //领取记录写入到 member_vip_record
            $insertData = array(
                "account" => $account,
                "amount" => $fee,
                "gift_type" => 2,
                "vip_level" => $vipLevel,
                "receive_status" => 1,
                "add_time" => $nowTime,
                "finish_time" => $nowTime,
            );
            $status = $this->db->insert("ns_member_vip_record", $insertData);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //更新余额到主账户
            $this->db->where("account='".$account."'");
            $status = $this->db->update("ns_member", array("balance" => $this->db->inc($fee)));
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //写入金流记录
            $this->db->where("account='" . $account . "'");
            $balance = $this->db->getValue("ns_member", "balance");
            $flowData = array(
                "account" => $account,
                "flow_type" => 3,
                "flow_amount" => $fee,
                "flow_balance" => $balance,
                "flow_content" => "存即送+" . $fee,
                "flow_time" => $nowTime
            );
            $status = $this->db->insert("ns_money_flow", $flowData);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //所有操作 全部通过 事务提交
            $this->db->commit();
            return 1;
        }
    }

    /**
     * 获取抽奖积分信息
     * @param $account
     * @param string $type times ：判断是否连续10未中， information：获取可用积分和剩余抽奖次数
     * @return array|int
     */
    public function get_lottery_info($account, $type = "times")
    {
        $account = strtolower(trim($account));
        if ($type == "times") {
            $this->db->where("account='" . $account . "'");
            $this->db->orderBy("id", "DESC");
            $list = $this->db->get("ns_lottery_record", 10, "id,prize_type");
            $status = 0;
            if (count($list) == 10) {
                foreach ($list as $item) {
                    if ($item['prize_type'] == 0) {
                        $status = 1;
                    } else {
                        $status = 0;
                        break;
                    }
                }
            }
            return $status;
        } elseif ($type == "information") {
            $sql = "SELECT a.credits_use,b.member_vip FROM ns_member AS a LEFT JOIN ns_member_vip AS b ON a.account=b.account WHERE a.account='" . $account . "'";
            $result = $this->db->rawQueryOne($sql);
            $times = vip_lottery_times($result['member_vip']);
            $this->db->where("account='" . $account . "' AND add_time BETWEEN '" . date("Y-m-d") . " 00:00:00' AND '" . date("Y-m-d") . " 23:59:59'");
            $num = $this->db->getValue("ns_lottery_record", "MAX(lottery_number)");
            $num = $num ? $num : 0;
            $times = $times - $num;
            return array("credits" => $result['credits_use'], "times" => $times);
        }
    }

    /**
     * 抽奖开始，进行一些系统判断和初始化
     * @param $account
     * @param string $arr
     * @return int
     */
    public function lottery_apply($account, $arr = "")
    {
        $nowTime = date("H:i:s");
        if ($nowTime >= "23:30:00") {
            return 1036;//抽奖功能关闭，每天的23点半到凌晨。
        }
        //1.积分是否够  2.次数是否有剩余 3.扣除对应的次数和积分
        $account = strtolower(trim($account));
        $info = $this->get_lottery_info($account, "information");
        if ($info['credits'] < 5) {
            return 1032;//积分不足
        }
        if ($info['times'] <= 0) {
            return 1033;//抽奖次数不足
        }
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        $status = $redis->get($account . "_lotter_start");
        $status = $status ? $status : 0;
        if ($status == 0) {
            $redis->setex($account . "_lotter_start", 1600, 1);
            return 1;
        } else {
            return 1034;//抽奖锁定，请等待前一次抽奖完成
        }
    }

    /**
     * 抽奖完成，写入一些数据
     * @param $account
     * @param $prize_type    奖品类别 0GoodLuck 1为58 2为128 3为388 4为588 5为1888 6为3888 7为8888
     * @param $amount    奖品金额   未中奖则传0
     * @param string $arr
     * @return int
     */
    public function lottery_submit($account, $prize_type, $amount, $arr = "")
    {
        $account = strtolower(trim($account));
        $nowTime = date("Y-m-d H:i:s");
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        $status = $redis->get($account . "_lotter_start");
        if ($status == 0) {
            return 1035;//抽奖超时，请重新抽奖
        }
        //开始事务流程 1.扣除积分，2.添加金额，3.添加记录，4.金流记录
        $this->db->startTransaction();
        //扣除积分及添加金额
        $redis->delete($account . "_lotter_start");
        if ($amount > 0 && $prize_type > 0) {
            $tableData = array(
                "credits_use" => $this->db->dec(5),
                "balance" => $this->db->inc($amount),
            );
        } else {
            $tableData = array(
                "credits_use" => $this->db->dec(5),
            );
        }
        $this->db->where("account='" . $account . "'");
        $status = $this->db->update("ns_member", $tableData);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //写入抽奖记录
        $this->db->where("account='" . $account . "' AND add_time BETWEEN '" . date("Y-m-d") . " 00:00:00' AND '" . date("Y-m-d") . " 23:59:59'");
        $num = $this->db->getValue("ns_lottery_record", "MAX(lottery_number)");
        $insertData = array(
            "account" => $account,
            "prize_type" => $prize_type,
            "amount" => $amount,
            "lottery_number" => $num + 1,
            "add_time" => $nowTime
        );
        $status = $this->db->insert("ns_lottery_record", $insertData);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //写入金流
        if ($amount > 0 && $prize_type > 0) {
            $this->db->where("account='" . $account . "'");
            $balance = $this->db->getValue("ns_member", "balance");
            $flowData = array(
                "account" => $account,
                "flow_type" => 3,
                "flow_amount" => $amount,
                "flow_balance" => $balance,
                "flow_content" => "抽奖金额 +" . $amount,
                "flow_time" => $nowTime
            );
            $status = $this->db->insert("ns_money_flow", $flowData);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
        }
        //所有操作 全部通过 事务提交
        $this->db->commit();
        return 1;
    }

    public function test()
    {
        return "aaa";
    }

    /**
     * 创建一个数据库连接
     */
    private function create_db()
    {
        $this->db = new MysqliDb();
    }

    /**
     * 会员 申请取款 的事务处理方法
     */
    private function p_member_debit($account, $bankid, $amount)
    {
        $now_date = date("Y-m-d H:i:s");
        $this->db->where("id=" . $bankid . " and account='" . $account . "'");
        $bank_info = $this->db->getOne("ns_member_bank", "member_name,bank_name,bank_no,bank_addr,bank_city,bank_province");
        if (!is_array($bank_info)) {
            return 2001;
        }
        //开始处理 1.查询余额 是否满足 2.冻结提款金额 3.插入数据 4.金流
        $this->db->startTransaction();
        //1.查余额 是否满足
        $amount = intval($amount); //把金额转化为整型
        $this->db->where("account='" . $account . "'");
        $result = $this->db->getOne("ns_member", "balance");
        $balance = $result['balance'];
        if ($amount > $balance) {
            return 1011; //余额不足
        }
        //2.冻结提款金额
        $this->db->where("account='" . $account . "'");
        $status = $this->db->update("ns_member", array("balance" => $this->db->dec($amount)));
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //3.插入新的取款记录
        $data = array(
            "account" => $account,
            "amount" => $amount,
            "add_time" => $now_date,
            "member_name" => $bank_info['member_name'],
            "bank_name" => $bank_info['bank_name'],
            "bank_no" => $bank_info['bank_no'],
            "bank_province" => $bank_info['bank_province'],
            "bank_city" => $bank_info['bank_city'],
            "bank_addr" => $bank_info['bank_addr']
        );
        $status = $this->db->insert("ns_debit", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //4.金流记录
        $data = array(
            "account" => $account,
            "flow_type" => 1,
            "flow_amount" => $amount,
            "flow_balance" => $balance - $amount,
            "flow_content" => "取款申请 -" . $amount,
            "flow_time" => $now_date
        );
        $status = $this->db->insert("ns_money_flow", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //所有操作 全部通过 事务提交
        $this->db->commit();
        return 1;
    }

    /**
     * 会员 自助取消取款 的事务处理方法
     */
    private function p_member_cancel_debit($account, $debit_id)
    {
        //1.更新取款信息 2.返回冻结的金额 3.插入金流
        $now_date = date("Y-m-d H:i:s");
        $this->db->where("id=" . $debit_id . " and account='" . $account . "' and debit_status=0");
        $result = $this->db->getOne("ns_debit", "amount");
        if (is_array($result)) {
            $this->db->startTransaction();
            $amount = $result['amount'];
            //1. 更新取款信息 为 审核不通过
            $data = array(
                "debit_status" => 3,
                "verify_name" => $account,
                "verify_time" => $now_date
            );
            $this->db->where("id=" . $debit_id);
            $status = $this->db->update("ns_debit", $data);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //2.返回被冻结的金额到主账户
            $this->db->where("account='" . $account . "'");
            $status = $this->db->update("ns_member", array("balance" => $this->db->inc($amount)));
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //3.金流记录
            $this->db->where("account='" . $account . "'");
            $balance = $this->db->getValue("ns_member", "balance");
            $data = array(
                "account" => $account,
                "flow_type" => 1,
                "flow_amount" => $amount,
                "flow_balance" => $balance,
                "flow_content" => "取款自助取消 " . $amount,
                "flow_time" => $now_date
            );
            $status = $this->db->insert("ns_money_flow", $data);
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
            //所有操作 全部通过 事务提交
            $this->db->commit();
            return 1;
        } else {
            return 1021; //取款已审核，无法取消
        }
    }

    /**
     * 会员 开始 游戏转账 的事务处理方法
     */
    private function p_transfer_start($account, $amount, $game_id, $game_name, $balance, $game_balance, $after_balance, $after_game_balance, $system_id, $data, $transfer_type)
    {
        //1.更新主帐号余额 2.插入转账记录数据
        $now_date = date("Y-m-d H:i:s");
        $this->db->startTransaction();
        if ($transfer_type == 1) {
            //当转入游戏平台时，先扣除金额。
            $this->db->where("account='" . $account . "'");
            $status = $this->db->update("ns_member", array("balance" => $after_balance));
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
        }
        $info = array(
            "account" => $account,
            "amount" => $amount,
            "game_id" => $game_id,
            "game_name" => $game_name,
            "system_id" => $system_id,
            "beforbalance" => $balance,
            "beforamount" => $game_balance,
            "afterbalance" => $after_balance,
            "afteramount" => $after_game_balance,
            "transfer_ip" => $data['ip'],
            "transfer_addr" => $data['address'],
            "add_time" => $now_date
        );
        $status = $this->db->insert("ns_transfer", $info);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //所有操作 全部通过 事务提交
        $this->db->commit();
        return 1;
    }

    /**
     * 会员 结束 游戏转账 的事务处理方法
     */
    private function p_tansfer_end($account, $amount, $after_balance, $system_id, $game_name, $transfer_type)
    {
        //1.更新转账记录 2.插入金流记录
        $now_date = date("Y-m-d H:i:s");

        $this->db->startTransaction();
        if ($transfer_type == 2) {
            // error_log("1#".$status."\r\n",3,"error_log.log");
            //当游戏平台转入主账户时，后添加金额。
            $this->db->where("account='" . $account . "'");
            $status = $this->db->update("ns_member", array("balance" => $after_balance));
            // error_log("1#".$status."\r\n",3,"error_log.log");
            if ($status === false) {
                $this->db->rollback();
                return 2001;
            }
        }
        $this->db->where("account='" . $account . "' and system_id='" . $system_id . "'");
        $status = $this->db->update("ns_transfer", array("transfer_status" => 1, "finish_time" => $now_date));
        // error_log("2#".$status."\r\n",3,"error_log.log");
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        $data = array(
            "account" => $account,
            "flow_type" => 2,
            "flow_amount" => $amount,
            "flow_balance" => $after_balance,
            "flow_content" => $game_name,
            "flow_time" => $now_date
        );
        $status = $this->db->insert("ns_money_flow", $data);
        // error_log("3#".$status."\r\n",3,"error_log.log");
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //所有操作 全部通过 事务提交
        $this->db->commit();
        return 1;
    }

    /**
     * 会员 签到金转入主账户 的事务处理方法
     */
    private function p_transfer_sign($account, $amount, $beforbalance, $beforamount, $afterbalance, $afteramount, $arr)
    {
        //1.更新余额和签到金 2.插入签到转换记录 3.插入金流记录
        $now_date = date("Y-m-d H:i:s");
        $this->db->startTransaction();
        $this->db->where("account='" . $account . "'");
        $status = $this->db->update("ns_member", array("balance" => $afterbalance, "sign_amount" => $afteramount));
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        $data = array(
            "account" => $account,
            "amount" => $amount,
            "beforbalance" => $beforbalance,
            "beforamount" => $beforamount,
            "afterbalance" => $afterbalance,
            "afteramount" => $afteramount,
            "add_time" => $now_date,
            "add_ip" => $arr['ip'],
            "add_addr" => $arr['address']
        );
        $status = $this->db->insert("ns_member_sign_transfer", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        $data = array(
            "account" => $account,
            "flow_type" => 3,
            "flow_amount" => $amount,
            "flow_balance" => $afterbalance,
            "flow_content" => "签到金转换 " . $amount,
            "flow_time" => $now_date
        );
        $status = $this->db->insert("ns_money_flow", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //所有操作 全部通过 事务提交
        $this->db->commit();
        return 1;
    }

    /**
     * 会员 在线支付存款 确认
     */
    private function p_onlinepay_sure($account, $deposit_id, $amount)
    {
        //1.查会员信息，是否是正式会员(取消)。2.更新存款列表信息、迁入到历史记录中。3.更新余额、更新总存款、更新积分。4.插入金流记录 5.更新会员等级
        $now_date = date("Y-m-d H:i:s");
        $this->db->where("account='" . $account . "'");
        $result = $this->db->getOne("ns_member", "id,balance,member_type");
        $member_id = $result['id'];
        $balance = $result['balance'];
        $member_type = $result['member_type'];
        $this->db->startTransaction();
        //2.更新存款列表信息、迁入到历史记录中。
        $this->db->where("id=" . $deposit_id);
        $status = $this->db->update("ns_deposit", array("deposit_status" => 1, "finish_time" => $now_date, "operator" => "auto", "member_type" => $member_type));
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        $sql = "INSERT INTO ns_deposit_history (SELECT * FROM ns_deposit WHERE id=" . $deposit_id . ")";
        $this->db->query($sql);
        $this->db->where("id=" . $deposit_id);
        $status = $this->db->delete("ns_deposit");
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }

        //3.更新余额、总存款、积分
        $credits = floor($amount / 20);
        $data = array(
            "balance" => $this->db->inc($amount),
            "total_deposit" => $this->db->inc($amount),
            "credits" => $this->db->inc($credits),
            "credits_use" => $this->db->inc($credits)
        );
        $this->db->where("account='" . $account . "'");
        $status = $this->db->update("ns_member", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }

        //4. 金流记录
        $data = array(
            "account" => $account,
            "flow_type" => 0,
            "flow_amount" => $amount,
            "flow_balance" => ($balance + $amount),
            "flow_content" => "在线支付 " . $amount,
            "flow_time" => $now_date
        );
        $status = $this->db->insert("ns_money_flow", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //所有操作 全部通过 事务提交
        $this->db->commit();
        //5.更新会员等级
        if ($member_type == 0) {
            $this->db->where("account='" . $account . "'");
            $this->db->update("ns_member", array("member_type" => 1));
        }

        return 1;
    }

    //p_deposit_success
    private function p_deposit_success($id, $operator)
    {
        /*存款成功处理*/
        /*1.查询deposit表中的数据*/
        /*2.计算存款额，积分*/
        /*3.更新存款表中的信息*/
        /*4.更新member中的余额,积分*/
        /*5.把数据写入到存款历史表中,删除存款表中的数据*/
        /*6.查询余额，写入金流记录中money_flow*/
        /*7.查询自动优惠信息*/
        /*8.查询会员状态,变更会员等级*/
        $now_time = date("Y-m-d H:i:s");
        //1.查询deposit中的数据
        $this->db->where("id=" . $id);
        $result = $this->db->getOne("ns_deposit", "account,amount,fee,bill_no");
        //2.存款金额和积分
        $total_amount = $result['amount'] + $result['fee'];
        //$total_amount = $result['amount'];
        $total_credits = intval($result['amount'] / 20);
        $account = $result['account'];
        //3.更新存款表中的信息
        $this->db->startTransaction();
        $data = array(
            "deposit_status" => 1,
            "finish_time" => $now_time,
            "operator" => $operator
        );
        $this->db->where("id=" . $id);
        $status = $this->db->update("ns_deposit", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //4.更新余额
        $data = array(
            "balance" => $this->db->inc($total_amount),
            "credits" => $this->db->inc($total_credits),
            "credits_use" => $this->db->inc($total_credits),
            "total_deposit" => $this->db->inc($result['amount']),
        );
        $this->db->where("account='" . $account . "'");
        $status = $this->db->update("ns_member", $data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //5.写入历史记录
        $this->db->where("id=" . $id);
        $deposit_data = $this->db->getOne("ns_deposit", "*");
        $this->db->where("id=" . $id);
        $this->db->delete("ns_deposit");
        $status = $this->db->insert("ns_deposit_history", $deposit_data);

        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        //6.查询余额信息 写入金流记录
        $this->db->where("account='" . $account . "'");
        $balance = $this->db->getOne("ns_member", "balance,member_type");
        $flow_data = array(
            "account" => $account,
            "flow_type" => 0,
            "flow_amount" => $total_amount,
            "flow_balance" => $balance['balance'],
            "flow_content" => "自动存款" . $result['amount'],
            "flow_time" => $now_time
        );
        $status = $this->db->insert("ns_money_flow", $flow_data);
        if ($status === false) {
            $this->db->rollback();
            return 2001;
        }
        if ($balance['member_type'] == 0) {
            $this->db->where("account='" . $account . "'");
            $this->db->update("ns_member", array("member_type" => 1));
        }
        $this->db->commit();
        return 1;
    }


    /**
     * 会员注册成功后，自动创建
     * @param $account string 会员帐号
     * @return true or false
     */
    private function creat_vip_info($account)
    {
        $this->db->where("account='" . $account . "'");
        $result = $this->db->getOne("ns_member_vip", "id");
        if (is_array($result)) {
            return false;
        } else {
            $data = array(
                "account" => $account
            );
            $this->db->insert("ns_member_vip", $data);
            return true;
        }

    }


    /**
     * 根据vip等级查询 救援金比例
     * @param $slot_vip int VIP等级
     * @return float 救援金比例
     */
    private function vip_to_rescue_ratio($slot_vip)
    {
        $ratio = 0;
        switch ($slot_vip) {
            case 0:
                $ratio = 0.04;
                break;
            case 1:
                $ratio = 0.04;
                break;
            case 2:
                $ratio = 0.04;
                break;
            case 3:
                $ratio = 0.06;
                break;
            case 4:
                $ratio = 0.06;
                break;
            case 5:
                $ratio = 0.06;
                break;
            case 6:
                $ratio = 0.07;
                break;
            case 7:
                $ratio = 0.07;
                break;
            case 8:
                $ratio = 0.08;
                break;
            case 9:
                $ratio = 0.09;
                break;
            case 10:
                $ratio = 0.1;
                break;
            case 11:
                $ratio = 0.15;
                break;
            default:
                $ratio = 0;
        }
        return $ratio;
    }

  

    /**
     * 会员游戏密码同步更新
     * @param $account string 会员帐号
     * @param $password string 会员旧密码
     * @return 无返回值
     */
    private function reset_game_password($account, $password)
    {
        $url = "http://ksadmin.jr71.com";
        $url .= "/phprpc/async.php";
        $data = array("type" => "game_password", "account" => $account, "password" => $password);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 1);
        curl_exec($ch);
        curl_close($ch);
    }

    /**
     * 会员获取申博的限红设置
     * @param $account string 会员帐号
     * @param $arr array 数组
     * @return betlimit
     */
    private function shenbo_betlimit($account, $arr = "")
    {
        $betlimit = array("sun609" => 3, "kss6352" => 3, "sun2035" => 3, "sun615" => 3, "kuanhu88" => 3, "sun035" => 3, "aaabbb99" => 3, "sc23005" => 3, "kstest" => 3, "sun008" => 3, "xjl77722" => 3, "zdp1997" => 3, "se8811" => 3, "www12312" => 3, "hai123" => 17);
        if (isset($betlimit[$account]) && $betlimit[$account] != "") {
            return $betlimit[$account];
        } else {
            return 1;
        }
    }

    /**
     * 发送邮件，用于用户找回帐号密码
     * @param $account string 会员帐号
     * @param $email string 会员邮箱
     * @return 返回的是  error code
     */
    private function send_forgetacc_email($account, $email, $password)
    {
        include_once("public/PHPMailer.class.php");
        include_once("public/smtp.class.php");
        $config = include("public/email.config.php");
        $content = $config['Body'];
        $content = str_replace("@account@", $account, $content);
        $content = str_replace("@password@", $password, $content);
        $mail = new PHPMailer();
        $mail->IsSMTP(); // 使用SMTP方式发送
        $mail->CharSet = 'UTF-8';// 设置邮件的字符编码
        $mail->Host = $config["Host"]; // 您的企业邮局域名
        $mail->SMTPAuth = true; // 启用SMTP验证功能
        $mail->Port = $config["Port"]; //SMTP端口
        $mail->SMTPSecure = 'ssl';  // 启用加密传输
        $mail->Username = $config["Username"]; // 邮局用户名(请填写完整的email地址)
        $mail->Password = $config["Password"]; // 邮局密码
        $mail->From = $config["From"]; //邮件发送者email地址
        $mail->FromName = $config["FromName"];
        $mail->AddAddress($email, "");
        $mail->Subject = $config['Subject']; //邮件标题
        $mail->Body = $content; //邮件内容
        $mail->isHTML(true);
        $mail->Send();
    }

 
}

?>