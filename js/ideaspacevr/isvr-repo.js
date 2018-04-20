var isvr_repo = {


		getMonthName: function (utc_month) {
				switch (utc_month) {
						case 0:
								return 'January';
								break;
						case 1:
								return 'February';
								break;
						case 2:
								return 'March';
								break;
						case 3:
								return 'April';
								break;
						case 4:
								return 'May';
								break;
						case 5:
								return 'June';
								break;
						case 6:
								return 'July';
								break;
						case 7:
								return 'August';
								break;
						case 8:
								return 'September';
								break;
						case 9:
								return 'October';
								break;
						case 10:
								return 'November';
								break;
						case 11:
								return 'December';
								break;
				}
		},


		getWeekDayName: function (utc_weekday) {
				switch (utc_month) {
						case 0:
								return 'January';
								break;
						case 1:

				}
		},


    init: function (repo_owner_name, repo_name) {

				this.sceneEl = document.querySelector('a-scene');

        this.xmlhttp = new XMLHttpRequest();
        this.xmlhttp.onreadystatechange = this.responseHandler.bind(this);
        this.xmlhttp.open('GET', 'https://api.github.com/repos/' + repo_owner_name + '/' + repo_name + '/stats/commit_activity', true);
        this.xmlhttp.send();

    },

    responseHandler: function () {

        var self = this;

        if (this.xmlhttp.readyState == 4 && this.xmlhttp.status == 200) {

            var weekly_commits = JSON.parse(this.xmlhttp.responseText);

            for (var i=0; i<weekly_commits.length; i++) {

								var date = new Date(weekly_commits[i].week * 1000);
console.log(this.getMonthName(date.getUTCMonth()));


								weekly_commits[i].days;


            } /* for */

        } /* if */

    }

};


