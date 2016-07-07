<?php
    $page_title="Conference Program";
    include("include/header.php");
?>

<h1>Conference Program</h1>

<div id="prog_ctrl" data-role="navbar">
        <ul>
                <li><a href="#" onClick="filterProgram('.prog-tuesday');">Tuesday</a></li>
                <li><a href="#" onClick="filterProgram('.prog-wednesday');">Wednesday</a></li>
                <li><a href="#" onClick="filterProgram('.prog-thursday');">Thursday</a></li>
                <li><a href="#" onClick="filterProgram('.prog-all');" class="ui-btn-active ui-state-persist">All</a></li>
        </ul>
</div>

<div id="program">

<ul class="program" data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-dividertheme="a" data-filter-placeholder="Filter program...">
<?php

  tprog_add_item("An Analysis of Traffic Policing in the Web", "", "Tobias Flach (University of Southern California / Google), Pavlos Papageorge and Andreas Terzis (Google), Luis Pedrosa (University of Southern California), Yuchung Cheng and Tayeb Karim (Google), and Ethan Katz-Bassett and Ramesh Govindan (University of Southern California)", "", "", "", "");
  tprog_add_item("Top-down Network Management on a Massive Scale", "", "Eric Sung, Xiaozheng Tie, Starsky Wong, and Hongyi Zeng (Facebook)", "", "", "", "");
  tprog_add_item("OpenBox: A Software-Defined Framework for Developing, Deploying, and Managing Network Functions", "", "Anat Bremler-Barr (The Interdisciplinary Center, Herzliya, Israel) and Yotam Harchol and David Hay (The Hebrew University of Jerusalem, Israel)", "", "", "", "");
  tprog_add_item("Fast Control Plane Analysis Using an Abstract Representation", "", "Aaron Gember-Jacobson, Raajay Viswanathan, and Aditya Akella (University of Wisconsin-Madison) and Ratul Mahajan (Microsoft Research)", "", "", "", "");
  tprog_add_item("The Deforestation of L2", "", "James McCauley (UC Berkeley / ICSI), Mingjie Zhao (UESTC / ICSI), Ethan J. Jackson and Sylvia Ratnasamy (UC Berkeley), Barath Raghavan (ICSI), and Scott Shenker (UC Berkeley / ICSI)", "", "", "", "");
  tprog_add_item("2DFQ: Two-Dimensional Fair Queueing for Multi-Tenant Cloud Services", "", "Jonathan Mace (Brown University), Peter Bodik and Madanlal Musuvathi (Microsoft), Rodrigo Fonseca (Brown University), and Krishnan Varadarajan (Microsoft)", "", "", "", "");
  tprog_add_item("Trumpet: Timely and Precise Triggers in Data Centers", "", "Masoud Moshref, Minlan Yu, and Ramesh Govindan (University of Southern California) and Amin Vahdat (Google, inc)", "", "", "", "");
  tprog_add_item("CODA: Toward Automatically Identifying and Scheduling Coflows in the Dark", "", "Hong Zhang, Li Chen, Bairen Yi, and Kai Chen (Hong Kong University of Science and Technology), Mosharaf Chowdhury (University of Michigan), and Yanhui Geng (Huawei Noah's Ark Lab)", "", "", "", "");
  tprog_add_item("Scalable Symbolic Execution for Modern Networks", "", "Radu Stoenescu, Matei Popovici, Lorina Negreanu, and Costin Raiciu (University Politehnica of Bucharest)", "", "", "", "");
  tprog_add_item("WebPerf: Evaluating What-If Scenarios for Cloud-hosted Web Applications", "", "Yurong Jiang (University of Southern California), Suman Nath and Lenin Ravindranath Sivalingam (Microsoft Research), and Ramesh Govindan (University of Southern California)", "", "", "", "");
  tprog_add_item("Jumpstarting BGP Security with Path-End Validation", "", "Avichai Cohen (Hebrew University), Yossi Gilad (Boston University), Amir Herzberg (Bar Ilan University), and Michael Schapira (Hebrew University)", "", "", "", "");
  tprog_add_item("Taking the Blame Game out of Data Centers Operations with NetPoirot", "", "Behnaz Arzani (University of Pennsylvania), Selim Ciraci (Microsoft), Boon Thau Loo (University of Pennsylvania), Assaf Schuster (Technion - Israel Institute of Technology), and Geoff Outhred (Microsoft)", "", "", "", "");
  tprog_add_item("Globally Synchronized Time via Datacenter Networks", "", "Ki Suh Lee, Han Wang, Vishal Shrivastav, and Hakim Weatherspoon (Cornell University)", "", "", "", "");

  tprog_add_item("PISCES: A Programmable, Protocol-Independent Software Switch", "", "Muhammad Shahbaz (Princeton University), Sean Choi (Stanford University), Ben Pfaff (VMware), Changhoon Kim (Barefoot Networks), Nick Feamster (Princeton University), Nick McKeown (Stanford University), and Jennifer Rexford (Princeton University)", "", "", "", "");
  tprog_add_item("Dataplane Specialization for High-performance OpenFlow Software Switching", "", "L&aacute;szl&oacute; Moln&aacute;r, Gergely Pongr&aacute;cz, G&aacute;bor Enyedi, and Zolt&aacute;n Kis (TrafficLab, Ericsson Research, Hungary) and Levente Csikor, Ferenc Juh&aacute;sz, Attila K&ouml;r&ouml;si, and G&aacute;bor R&eacute;tv&aacute;ri (Department of Telecommunications and Media Informatics, Budapest University of Technology and Economics)", "", "", "", "");
  tprog_add_item("Scheduling Mix-flows in Commodity Datacenters with Karuna", "", "Li Chen, Kai Chen, and Wei Bai (Hong Kong University of Science and Technology) and Mohammad Alizadeh (MIT)", "", "", "", "");
  tprog_add_item("Hypervisor-based Algorithmic Virtualization of TCP Congestion Control", "", "Bryce Cronkite-Ratcliff (Stanford), Aran Bergman and Shay Vargaftik (Technion), Madhusudhan Ravi (VMware), Nick McKeown (Stanford), Ittai Abraham (VMware), and Isaac Keslassy (Technion and VMware)", "", "", "", "");
  tprog_add_item("NUMFabric: Fast and Flexible Bandwidth Allocation in Datacenters", "", "Kanthi Nagaraj and Dinesh Bharadia (Stanford University), Hongzi Mao (M.I.T), Sandeep Chinchali (Stanford University), Mohammad Alizadeh (M.I.T.), and Sachin Katti (Stanford University)", "", "", "", "");
  tprog_add_item("Evolve or Die: High-Availability Design Principles Drawn from Failures in a Global-Scale Content Provider", "", "Ramesh Govindan (Google, USC) and Ina Minei, Mahesh Kallahalla, Bikash Koley, and Amin Vahdat (Google)", "", "", "", "");
  tprog_add_item("SNAP: Stateful Network-Wide Abstractions for Packet Processing", "", "Mina Tahmasbi Arashloo and Yaron Koral (Princeton University), Michael Greenberg (Pomona College), and Jennifer Rexford and David Walker (Princeton University)", "", "", "", "");
  tprog_add_item("Dynamic Pricing and Traffic Engineering for Timely Inter-Datacenter Transfers", "", "Virajith Jalaparti (Microsoft), Ivan Bliznets (St. Petersburg Academic University), and Srikanth Kandula, Brendan Lucier, and Ishai Menache (Microsoft)", "", "", "", "");
  tprog_add_item("Bringing Backscatter Communication to Commodity Devices", "", "Vikram Iyer, Vamsi Talla, Bryce Kellogg, Shyamnath Gollakota, and Joshua Smith (University of Washington)", "", "", "", "");
  tprog_add_item("Eliminating Channel Feedback in Next-Generation Cellular Networks", "", "Deepak Vasisht (MIT), Swarun Kumar (CMU), and Hariharan Rahul and Dina Katabi (MIT)", "", "", "", "");
  tprog_add_item("Neutral Net Neutrality", "", "Yiannis Yiakoumis, Sachin Katti, and Nick McKeown (Stanford University)", "", "", "", "");
  tprog_add_item("ClickNP: Highly Flexible and High-performance Network Processing with Reconfigurable Hardware", "", "Bojie Li (USTC and Microsoft Research), Kun Tan (Microsoft Research), Layong (Larry) Luo (Microsoft), Yanqing Peng (SJTU and Microsoft Research), Renqian Luo (USTC and Microsoft Research), and Ningyi Xu, Yongqiang Xiong, and Peng Cheng (Microsoft Research)", "", "", "", "");

  tprog_add_item("CS2P: Improving Video Bitrate Selection and Adaptation with Data-Driven Throughput Prediction", "", "Yi Sun (Institute of Computing Technology, Chinese Academy of Sciences), Xiaoqi Yin, Junchen Jiang, and Vyas Sekar (CMU), Fuyuan Lin and Nanshu Wang (ICT/CAS), Tao Liu (iQIYI), and Bruno Sinopoli (CMU)", "", "", "", "");
  tprog_add_item("Programmable Packet Scheduling", "", "Anirudh Sivaraman and Suvinay Subramanian (MIT CSAIL), Anurag Agrawal (Barefoot Networks), Sharad Chole, Shang-Tse Chuang, and Tom Edsall (Cisco Systems), Mohammad Alizadeh (MIT CSAIL), Sachin Katti and Nick McKeown (Stanford University), and Hari Balakrishnan (MIT CSAIL)", "", "", "", "");
  tprog_add_item("Packet Transactions: High-level Programming for Line-Rate Switches", "", "Anirudh Sivaraman (MIT CSAIL), Mihai Budiu (Barefoot Networks), Alvin Cheung (University of Washington, Seattle), Changhoon Kim and Steve Licking (Barefoot Networks), George Varghese (Microsoft Research), Hari Balakrishnan and Mohammad Alizadeh (MIT CSAIL), and Nick McKeown (Stanford University)", "", "", "", "");
  tprog_add_item("Enabling Practical Backscatter Communication for On-body Sensors", "", "Pengyu Zhang, Mohammad Rostami, Pan Hu, and Deepak Ganesan (University of Massachusetts Amherst)", "", "", "", "");
  tprog_add_item("Braidio: An Integrated Active-Passive Radio for Mobile Devices with Asymmetric Energy Budgets", "", "Pan Hu, Pengyu Zhang, Mohammad Rostami, and Deepak Ganesan (University of Massachusetts Amherst)", "", "", "", "");
  tprog_add_item("AC/DC TCP: Virtual Switch-based Congestion Control Enforcement for Datacenter Networks", "", "Keqiang He (University of Wisconsin-Madison), Eric Rozner (IBM Research), Kanak Agarwal, Yu (Jason) Gu, Wes Felter, and John Carter (IBM), and Aditya Akella (University of Wisconsin-Madison)", "", "", "", "");
  tprog_add_item("Optimizing Bulk Transfers with Software-Defined Optical WAN", "", "Xin Jin (Princeton University), Yiran Li and Da Wei (Tsinghua University), Siming Li and Jie Gao (Stony Brook University), Lei Xu (Sodero Networks), Guangzhi Li (AT&T Labs), Wei Xu (Tsinghua University), and Jennifer Rexford (Princeton University)", "", "", "", "");
  tprog_add_item("Real-time Distributed MIMO Systems", "", "Ezzeldin Hamed, Hariharan Rahul, Mohammed A. Abdelghany, and Dina Katabi (Massachusetts Institute of Technology)", "", "", "", "");
  tprog_add_item("One Sketch to Rule Them All: Rethinking Network Flow Monitoring with UnivMon", "", "Zaoxing Liu (Johns Hopkins University), Antonis Manousis (Carnegie Mellon University), Greg Vorsanger (Johns Hopkins University), Vyas Sekar (Carnegie Mellon University), and Vladimir Braverman (Johns Hopkins University)", "", "", "", "");
  tprog_add_item("Via: Improving Internet Telephony Call Quality Using Predictive Relay Selection", "", "Junchen Jiang (Microsoft Research / CMU), Rajdeep Das, Ganesh Ananthanarayanan, Philip A. Chou, and Venkata Padmanabhan (Microsoft Research), Vyas Sekar (CMU), Esbjorn Dominique, Marcin Goliszewski, Dalibor Kukoleca, and Renat Vafin (Microsoft), and Hui Zhang (CMU)", "", "", "", "");
  tprog_add_item("RDMA over Commodity Ethernet at Scale", "", "Chuanxiong Guo (Microsoft Research), Haitao Wu, Zhong Deng, Gaurav Soni, and Jianxi Ye (Microsoft), Jitu Padhye (Microsoft Research), and Marina Lipshteyn (Microsoft)", "", "", "", "");
  tprog_add_item("Don't Mind the Gap: Bridging Network-wide Objectives and Device-level Configurations", "", "Ryan Beckett (Princeton University), Ratul Mahajan and Jitu Padhye (Microsoft Research), Todd Millstein (University of California, Los Angeles), and David Walker (Princeton University)", "", "", "", "");
  tprog_add_item("The Good, the Bad, and the Differences: Better Network Diagnostics with Differential Provenance", "", "Ang Chen, Yang Wu, and Andreas Haeberlen (University of Pennsylvania), Wenchao Zhou (Georgetown University), and Boon Thau Loo (University of Pennsylvania)", "", "", "", "");
  tprog_add_item("ProjecToR: Agile Reconfigurable Datacenter Interconnect", "", "Monia Ghobadi, Ratul Mahajan, and Amar Phanishayee (Microsoft Research), Houman Rastegarfar, Pierre-Alexandre Blanche, Madeleine Glick, and Daniel Kilper (University of Arizona), and Janardhan Kulkarni, Gireeja Ranade, and Nikhil Devanur (Microsoft Research)", "", "", "", "");
?>
</ul>

</div>


<?php include ("include/footer.php"); ?>
