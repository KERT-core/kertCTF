#!/bin/sh

MY_MESSAGE="kert.or.kr"
curl -s qrenco.de/$MY_MESSAGE | lolcat -a -s 20
