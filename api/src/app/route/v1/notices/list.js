const express = require('express');
const router = express.Router();
const notices = [
    {
        "memberId": 1,
        "result": 0,
        "newsInfoList": [
            {
                "noticeId": 1,
                "title": "お知らせ-01-01",
                "sendDate": 20200101,
                "sendTime": 1234,
                "status": 0
            },
            {
                "noticeId": 2,
                "title": "お知らせ-01-02",
                "sendDate": 20200101,
                "sendTime": 1234,
                "status": 0
            },
            {
                "noticeId": 3,
                "title": "お知らせ-01-03",
                "sendDate": 20200101,
                "sendTime": 1234,
                "status": 0
            },
            {
                "noticeId": 4,
                "title": "お知らせ-01-04",
                "sendDate": 20200101,
                "sendTime": 1234,
                "status": 0
            }
        ]
    },
    {
        "memberId": 2,
        "result": 0,
        "newsInfoList": [
            {
                "noticeId": 1,
                "title": "お知らせ-02-01",
                "sendDate": 20200101,
                "sendTime": 1234,
                "status": 0
            },
            {
                "noticeId": 2,
                "title": "お知らせ-02-02",
                "sendDate": 20200101,
                "sendTime": 1234,
                "status": 0
            },
            {
                "noticeId": 3,
                "title": "お知らせ-02-03",
                "sendDate": 20200101,
                "sendTime": 1234,
                "status": 0
            },
            {
                "noticeId": 4,
                "title": "お知らせ-02-04",
                "sendDate": 20200101,
                "sendTime": 1234,
                "status": 0
            }
        ]
    }
];

router.get('/', function (req, res) {
    const memberId = req.query?.memberId;
    const newsInfoList = notices.filter(notice => notice.memberId == memberId)[0]?.newsInfoList;

    const displayNum = req.query?.displayNum;
    const pageNo = req.query?.pageNo ?? 1;
    const begin = displayNum * (pageNo - 1);
    const end = begin + displayNum;


    res.json({
        "memberId": memberId,
        "result": 0,
        "newsInfoList": newsInfoList.slice(begin, end)
    });
});

module.exports = router;