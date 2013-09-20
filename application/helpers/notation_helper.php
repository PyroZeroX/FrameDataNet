<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('parseNotation'))
{
    function parseNotation($icon)
    {
        switch($icon)
        {
            case $icon == "qcf": return "<img src='../img/trans.png' class='qcf notationsymbol' alt='qcf'/>"; break;
            case $icon == "QCF": return "<img src='../img/trans.png' class='qcf notationsymbol' alt='qcf'/>"; break;
            case $icon == "qcfx2": return "<img src='../img/trans.png' class='qcf notationsymbol' alt='qcf'/><img src='../img/trans.png' class='qcf notationsymbol' alt='qcf'/>"; break;
            case $icon == "QCFX2": return "<img src='../img/trans.png' class='qcf notationsymbol' alt='qcf'/><img src='../img/trans.png' class='qcf notationsymbol' alt='qcf'/>"; break;
            case $icon == "qcb": return "<img src='../img/trans.png' class='qcb notationsymbol' alt='qcb'/>"; break;
            case $icon == "qcbx2": return "<img src='../img/trans.png' class='qcb notationsymbol' alt='qcb'/><img src='../img/trans.png' class='qcb notationsymbol' alt='qcb'/>"; break;
            case $icon == "hcf": return "<img src='../img/trans.png' class='hcf notationsymbol' alt='hcf'/>"; break;
            case $icon == "hcfx2": return "<img src='../img/trans.png' class='hcf notationsymbol' alt='hcf'/><img src='../img/trans.png' class='hcf notationsymbol' alt='hcf'/>"; break;
            case $icon == "hcb": return "<img src='../img/trans.png' class='hcb notationsymbol' alt='hcb'/>"; break;
            case $icon == "hcbx2": return "<img src='../img/trans.png' class='hcb notationsymbol' alt='hcb'/><img src='../img/trans.png' class='hcb notationsymbol' alt='hcb'/>"; break;
            case $icon == "dp": return "<img src='../img/trans.png' class='dp notationsymbol' alt='dp'/>"; break;
            case $icon == "rdp": return "<img src='../img/trans.png' class='rdp notationsymbol' alt='rdp'/>"; break;
            case $icon == "db~f": return "(Charge)<img src='../img/trans.png' class='downback notationsymbol' alt='db'/><img src='../img/trans.png' class='forward notationsymbol' alt='f'/>"; break;
            case $icon == "b~f": return "(Charge)<img src='../img/trans.png' class='back notationsymbol' alt='b'/><img src='../img/trans.png' class='forward notationsymbol' alt='f'/>"; break;
            case $icon == "d~u": return "(Charge)<img src='../img/trans.png' class='down notationsymbol' alt='d'/><img src='../img/trans.png' class='up notationsymbol' alt='u'/>"; break;
            case $icon == "Hold": return "(Hold) "; break;
            case $icon == "hold": return "(Hold) "; break;
            case $icon == "QCB": return "<img src='../img/trans.png' class='qcb notationsymbol' alt='qcb'/>"; break;
            case $icon == "QCBX2": return "<img src='../img/trans.png' class='qcb notationsymbol' alt='qcb'/><img src='../img/trans.png' class='qcb notationsymbol' alt='qcb'/>"; break;
            case $icon == "HCF": return "<img src='../img/trans.png' class='hcf notationsymbol' alt='hcf'/>"; break;
            case $icon == "HCFX2": return "<img src='../img/trans.png' class='hcf notationsymbol' alt='hcf'/><img src='../img/trans.png' class='hcf notationsymbol' alt='hcf'/>"; break;
            case $icon == "HCB": return "<img src='../img/trans.png' class='hcb notationsymbol' alt='hcb'/>"; break;
            case $icon == "HCBX2": return "<img src='../img/trans.png' class='hcb notationsymbol' alt='hcb'/><img src='../img/trans.png' class='hcb notationsymbol' alt='hcb'/>"; break;
            case $icon == "DP": return "<img src='../img/trans.png' class='dp notationsymbol' alt='dp'/>"; break;
            case $icon == "RDP": return "<img src='../img/trans.png' class='rdp notationsymbol' alt='rdp'/>"; break;
            case $icon == "DB~G": return "(Charge)<img src='../img/trans.png' class='downback notationsymbol' alt='db'/><img src='../img/trans.png' class='forward notationsymbol' alt='f'/>"; break;
            case $icon == "B~F": return "(Charge)<img src='../img/trans.png' class='back notationsymbol' alt='b'/><img src='../img/trans.png' class='forward notationsymbol' alt='f'/>"; break;
            case $icon == "D~U": return "(Charge)<img src='../img/trans.png' class='down notationsymbol' alt='d'/><img src='../img/trans.png' class='up notationsymbol' alt='u'/>"; break;
            case $icon == "DB~DF~DB~UF/UB": return "(Charge)<img src='../img/trans.png' class='downback notationsymbol' alt='db'/><img src='../img/trans.png' class='downforward notationsymbol' alt='df'/><img src='../img/trans.png' class='downback notationsymbol' alt='db'/><img src='../img/trans.png' class='upforward notationsymbol' alt='uf'/><img src='../img/trans.png' class='upback notationsymbol' alt='ub'/>"; break;
            case $icon == "db~df~db~uf/ub": return "(Charge)<img src='../img/trans.png' class='downback notationsymbol' alt='db'/><img src='../img/trans.png' class='downforward notationsymbol' alt='df'/><img src='../img/trans.png' class='downback notationsymbol' alt='db'/><img src='../img/trans.png' class='upforward notationsymbol' alt='uf'/>/<img src='../img/trans.png' class='upback notationsymbol' alt='ub'/>"; break;
            case $icon == "RELEASE": return "(Release) "; break;
            case $icon == "release": return "(Release) "; break;
            case $icon == "HOLD": return "(Hold) "; break;
            case $icon == "2btn": return "<img src='../img/trans.png' class='plus notationsymbol' alt='plus'/>2BTN"; break;
            case $icon == "(x4min)": return " (x4 min)"; break;
            case $icon == "d": return "<img src='../img/trans.png' class='down notationsymbol' alt='d'/>"; break;
            case $icon == "f": return "<img src='../img/trans.png' class='forward notationsymbol' alt='f'/>"; break;
            case $icon == "F": return "<img src='../img/trans.png' class='forward notationsymbol' alt='f'/>"; break;
            case $icon == "u": return "<img src='../img/trans.png' class='up notationsymbol' alt='u'/>"; break;
            case $icon == "U": return "<img src='../img/trans.png' class='up notationsymbol' alt='u'/>"; break;
            case $icon == "b": return "<img src='../img/trans.png' class='back notationsymbol' alt='b'/>"; break;
            case $icon == "db": return "<img src='../img/trans.png' class='downback notationsymbol' alt='db'/>"; break;
            case $icon == "DB": return "<img src='../img/trans.png' class='downback notationsymbol' alt='db'/>"; break;
            case $icon == "ub": return "<img src='../img/trans.png' class='upback notationsymbol' alt='ub'/>"; break;
            case $icon == "UB": return "<img src='../img/trans.png' class='upback notationsymbol' alt='ub'/>"; break;
            case $icon == "df": return "<img src='../img/trans.png' class='downforward notationsymbol' alt='df'/>"; break;
            case $icon == "DF": return "<img src='../img/trans.png' class='downforward notationsymbol' alt='df'/>"; break;
            case $icon == "uf": return "<img src='../img/trans.png' class='upforward notationsymbol' alt='uf'/>"; break;
            case $icon == "UF": return "<img src='../img/trans.png' class='upforward notationsymbol' alt='uf'/>"; break;
            case $icon == "cw": return "<img src='../img/trans.png' class='tkforward notationsymbol' alt='uf'/>"; break;
            case $icon == "+": return "<img src='../img/trans.png' class='plus notationsymbol' alt='plus'/>"; break;
            case $icon == "A": return "<img src='../img/trans.png' class='a notationsymbol' alt='A'/>"; break;
            case $icon == "B": return "<img src='../img/trans.png' class='b notationsymbol' alt='B'/>"; break;
            case $icon == "C": return "<img src='../img/trans.png' class='c notationsymbol' alt='C'/>"; break;
            case $icon == "D": return "<img src='../img/trans.png' class='d notationsymbol' alt='D'/>"; break;
            case $icon == "BD": return "<img src='../img/trans.png' class='b notationsymbol' alt='B'/><img src='../img/trans.png' class='plus notationsymbol' alt='plus'/><img src='../img/trans.png' class='d notationsymbol' alt='D'/>"; break;
            case $icon == "B+D": return "<img src='../img/trans.png' class='b notationsymbol' alt='B'/><img src='../img/trans.png' class='plus notationsymbol' alt='plus'/><img src='../img/trans.png' class='d notationsymbol' alt='D'/>"; break;
            case $icon == "AC": return "<img src='../img/trans.png' class='a notationsymbol' alt='A'/><img src='../img/trans.png' class='plus notationsymbol' alt='plus'/><img src='../img/trans.png' class='c notationsymbol' alt='C'/>"; break;
            case $icon == "A+C": return "<img src='../img/trans.png' class='a notationsymbol' alt='A'/><img src='../img/trans.png' class='plus notationsymbol' alt='plus'/><img src='../img/trans.png' class='c notationsymbol' alt='C'/>"; break;
            case $icon == "B/D": return "<img src='../img/trans.png' class='b notationsymbol' alt='B'/>/<img src='../img/trans.png' class='d notationsymbol' alt='D'/>"; break;
            case $icon == "A/C": return "<img src='../img/trans.png' class='a notationsymbol' alt='A'/>/<img src='../img/trans.png' class='c notationsymbol' alt='C'/>"; break;
            case $icon == "A/B/C/D": return "<img src='../img/trans.png' class='a notationsymbol' alt='A'/>/<img src='../img/trans.png' class='b notationsymbol' alt='B'/>/<img src='../img/trans.png' class='c notationsymbol' alt='C'/>/<img src='../img/trans.png' class='d notationsymbol' alt='D'/>"; break;
            case $icon == "LK": return "<img src='../img/trans.png' class='lk notationsymbol' alt='LK'/>"; break;
            case $icon == "MK": return "<img src='../img/trans.png' class='mk notationsymbol' alt='MK'/>"; break;
            case $icon == "HK": return "<img src='../img/trans.png' class='hk notationsymbol' alt='HK'/>"; break;
            case $icon == "LP": return "<img src='../img/trans.png' class='lp notationsymbol' alt='LP'/>"; break;
            case $icon == "MP": return "<img src='../img/trans.png' class='mp notationsymbol' alt='MP'/>"; break;
            case $icon == "HP": return "<img src='../img/trans.png' class='hp notationsymbol' alt='HP'/>"; break;
            case $icon == "p": return "<img src='../img/trans.png' class='punch notationsymbol' alt='Punch'/>"; break;
            case $icon == "P": return "<img src='../img/trans.png' class='punch notationsymbol' alt='Punch'/>"; break;
            case $icon == "2P": return "<img src='../img/trans.png' class='punch notationsymbol' alt='Punch'/><img src='../img/trans.png' class='punch notationsymbol' alt='Punch'/>"; break;
            case $icon == "3P": return "<img src='../img/trans.png' class='punch notationsymbol' alt='Punch'/><img src='../img/trans.png' class='punch notationsymbol' alt='Punch'/><img src='../img/trans.png' class='punch notationsymbol' alt='Punch'/>"; break;
            case $icon == "k": return "<img src='../img/trans.png' class='kick notationsymbol' alt='kick'/>"; break;
            case $icon == "K": return "<img src='../img/trans.png' class='kick notationsymbol' alt='kick'/>"; break;
            case $icon == "2K": return "<img src='../img/trans.png' class='kick notationsymbol' alt='kick'/><img src='../img/trans.png' class='kick notationsymbol' alt='kick'/>"; break;
            case $icon == "3K": return "<img src='../img/trans.png' class='kick notationsymbol' alt='kick'/><img src='../img/trans.png' class='kick notationsymbol' alt='kick'/><img src='../img/trans.png' class='kick notationsymbol' alt='kick'/>"; break;
            case $icon == "LP+LK": return "<img src='../img/trans.png' class='lp notationsymbol' alt='LP'/><img src='../img/trans.png' class='plus notationsymbol' alt='plus'/><img src='../img/trans.png' class='lk notationsymbol' alt='LK'/>"; break;
            case $icon == "MP+MK": return "<img src='../img/trans.png' class='mp notationsymbol' alt='MP'/><img src='../img/trans.png' class='plus notationsymbol' alt='plus'/><img src='../img/trans.png' class='mk notationsymbol' alt='MK'/>"; break;
            case $icon == "HP+HK": return "<img src='../img/trans.png' class='hp notationsymbol' alt='HP'/><img src='../img/trans.png' class='plus notationsymbol' alt='plus'/><img src='../img/trans.png' class='hk notationsymbol' alt='HK'/>"; break;
            default: return $icon; break;
        }
    } 
}