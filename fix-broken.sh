#!/bin/bash
apt='apt'
action='remove'
if [[ -n "$1" ]]; then
	action=$1
fi
if ! type "apt" > /dev/null; then
	apt='apt-get'
fi
baseCmd="sudo $apt $action -y"
while read line; do
	cmd="$baseCmd $line"
	eval $cmd
done < <(grep -oP 'Broken \K.*?(?=:)' /var/log/dist-upgrade/apt.log)